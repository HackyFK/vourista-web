<?php
// app/Http/Controllers/PesananController.php

namespace App\Http\Controllers;

use App\Models\Jajan;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index()
    {
        $jajans = Jajan::all();
        return view('pesanan.index', compact('jajans'));
    }

    public function create(Request $request)
    {
        $keranjang = session('keranjang', []);
        
        if (empty($keranjang)) {
            return redirect()->route('pesanan.index')->with('error', 'Keranjang masih kosong!');
        }

        $jajanIds = array_keys($keranjang);
        $jajans = Jajan::whereIn('id', $jajanIds)->get();
        
        $subtotal = 0;
        foreach ($keranjang as $jajanId => $jumlah) {
            $jajan = $jajans->find($jajanId);
            if ($jajan) {
                $subtotal += $jajan->harga * $jumlah;
            }
        }

        return view('pesanan.create', compact('jajans', 'keranjang', 'subtotal'));
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'jajan_id' => 'required|exists:jajans,id',
            'jumlah' => 'required|integer|min:1|max:100',
        ]);

        $keranjang = session('keranjang', []);
        $jajanId = $request->jajan_id;
        $jumlah = $request->jumlah;

        if (isset($keranjang[$jajanId])) {
            $keranjang[$jajanId] += $jumlah;
        } else {
            $keranjang[$jajanId] = $jumlah;
        }

        session(['keranjang' => $keranjang]);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil ditambahkan ke keranjang!',
            'total_items' => array_sum($keranjang)
        ]);
    }

    public function updateCart(Request $request)
    {
        $request->validate([
            'jajan_id' => 'required|exists:jajans,id',
            'jumlah' => 'required|integer|min:0|max:100',
        ]);

        $keranjang = session('keranjang', []);
        $jajanId = $request->jajan_id;
        $jumlah = $request->jumlah;

        if ($jumlah == 0) {
            unset($keranjang[$jajanId]);
        } else {
            $keranjang[$jajanId] = $jumlah;
        }

        session(['keranjang' => $keranjang]);

        // Hitung ulang subtotal
        $jajanIds = array_keys($keranjang);
        $jajans = Jajan::whereIn('id', $jajanIds)->get();
        
        $subtotal = 0;
        foreach ($keranjang as $id => $qty) {
            $jajan = $jajans->find($id);
            if ($jajan) {
                $subtotal += $jajan->harga * $qty;
            }
        }

        return response()->json([
            'success' => true,
            'subtotal' => $subtotal,
            'formatted_subtotal' => 'Rp ' . \number_format($subtotal, 0, ',', '.'),
            'total_items' => array_sum($keranjang)
        ]);
    }

    public function hitungOngkir(Request $request)
    {
        $request->validate([
            'jarak' => 'required|numeric|min:0.1|max:100',
        ]);

        $ongkir = Pesanan::hitungOngkir($request->jarak);

        return response()->json([
            'success' => true,
            'ongkir' => $ongkir,
            'formatted_ongkir' => 'Rp ' . number_format($ongkir, 0, ',', '.')
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required|string|max:100',
            'alamat' => 'required|string|max:500',
            'no_hp' => 'required|string|max:20',
            'jarak_km' => 'required|numeric|min:0.1|max:100',
        ], [
            'nama_pemesan.required' => 'Nama pemesan harus diisi.',
            'alamat.required' => 'Alamat harus diisi.',
            'no_hp.required' => 'Nomor HP harus diisi.',
            'jarak_km.required' => 'Jarak harus diisi.',
            'jarak_km.min' => 'Jarak minimal 0.1 km.',
            'jarak_km.max' => 'Jarak maksimal 100 km.',
        ]);

        $keranjang = session('keranjang', []);
        
        if (empty($keranjang)) {
            return redirect()->back()->with('error', 'Keranjang masih kosong!');
        }

        try {
            DB::beginTransaction();

            // Ambil data jajan
            $jajanIds = array_keys($keranjang);
            $jajans = Jajan::whereIn('id', $jajanIds)->get();
            
            // Hitung subtotal produk
            $subtotalProduk = 0;
            foreach ($keranjang as $jajanId => $jumlah) {
                $jajan = $jajans->find($jajanId);
                if ($jajan) {
                    $subtotalProduk += $jajan->harga * $jumlah;
                }
            }

            // Hitung ongkir
            $ongkir = Pesanan::hitungOngkir($request->jarak_km);
            $totalHarga = $subtotalProduk + $ongkir;

            // Buat pesanan
            $pesanan = Pesanan::create([
                'nama_pemesan' => $request->nama_pemesan,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'jarak_km' => $request->jarak_km,
                'ongkir' => $ongkir,
                'subtotal_produk' => $subtotalProduk,
                'total_harga' => $totalHarga,
                'metode_pembayaran' => 'COD',
                'status' => 'pending',
                'tanggal_pesan' => now(),
            ]);

            // Buat detail pesanan
            foreach ($keranjang as $jajanId => $jumlah) {
                $jajan = $jajans->find($jajanId);
                if ($jajan) {
                    DetailPesanan::create([
                        'pesanan_id' => $pesanan->id,
                        'jajan_id' => $jajan->id,
                        'jumlah' => $jumlah,
                        'harga_satuan' => $jajan->harga,
                        'subtotal' => $jajan->harga * $jumlah,
                    ]);
                }
            }

            // Hapus keranjang
            session()->forget('keranjang');

            DB::commit();

            return redirect()->route('pesanan.success', ['pesanan' => $pesanan->id])
    ->with('success', 'Pesanan berhasil dibuat!');


        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat memproses pesanan.')
                ->withInput();
        }
    }

    public function success(Pesanan $pesanan)
    {
        $pesanan->load('detailPesanans.jajan');
        return view('pesanan.success', compact('pesanan'));
    }

    public function clearCart()
{
     session()->forget('keranjang');
    return 'Cart cleared';

    return response()->json([
        'success' => true,
        'message' => 'Keranjang berhasil dikosongkan'
    ]);
}

}