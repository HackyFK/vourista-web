@extends('layouts.admin')

@section('title', 'Laporan Pesanan - Admin Vourista')
@section('page-title', 'Laporan Pesanan')

@section('content')
<div class="space-y-6">
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-full">
                    <i class="fas fa-shopping-cart text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Total Pesanan</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ number_format($totalPesanan) }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-full">
                    <i class="fas fa-clock text-yellow-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Pending</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ number_format($pendingCount) }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-full">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Selesai</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ number_format($selesaiCount) }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center">
                <div class="p-3 bg-emerald-100 rounded-full">
                    <i class="fas fa-money-bill-wave text-emerald-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Total Pendapatan</p>
                    <p class="text-2xl font-semibold text-gray-900">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <form method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select name="status" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="">Semua Status</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="dikonfirmasi" {{ request('status') == 'dikonfirmasi' ? 'selected' : '' }}>Dikonfirmasi</option>
                    <option value="dikirim" {{ request('status') == 'dikirim' ? 'selected' : '' }}>Dikirim</option>
                    <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="dibatalkan" {{ request('status') == 'dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Dari</label>
                <input type="date" name="tanggal_dari" value="{{ request('tanggal_dari') }}" 
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Sampai</label>
                <input type="date" name="tanggal_sampai" value="{{ request('tanggal_sampai') }}" 
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            
            <div class="flex items-end space-x-2">
                <button type="submit" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                    <i class="fas fa-search mr-2"></i>Filter
                </button>
                <button type="button" onclick="printAll()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200" title="Cetak Semua">
                    <i class="fas fa-print"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- Orders Table -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full" id="pesananTable">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Pemesan</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Produk</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Total</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider no-print">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($pesanans as $pesanan)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-gray-900">#{{ $pesanan->id }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-gray-900">{{ $pesanan->nama_pemesan }}</div>
                                <div class="text-sm text-gray-500">{{ $pesanan->no_hp }}</div>
                                <div class="text-xs text-gray-400 mt-1">{{ Str::limit($pesanan->alamat, 50) }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    @foreach($pesanan->detailPesanans as $detail)
                                        <div class="mb-1">
                                            {{ $detail->jumlah }}x {{ $detail->jajan->judul }}
                                            <span class="text-gray-500">(Rp {{ number_format($detail->subtotal, 0, ',', '.') }})</span>
                                        </div>
                                    @endforeach
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <div>Subtotal: Rp {{ number_format($pesanan->subtotal_produk, 0, ',', '.') }}</div>
                                    <div>Ongkir ({{ $pesanan->jarak_km }} km): Rp {{ number_format($pesanan->ongkir, 0, ',', '.') }}</div>
                                    <div class="font-semibold text-green-600 border-t pt-1 mt-1">
                                        Total: Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $pesanan->status_badge }}">
                                    {{ ucfirst($pesanan->status) }}
                                </span>
                                <div class="text-xs text-gray-500 mt-1">{{ $pesanan->metode_pembayaran }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $pesanan->tanggal_pesan->format('d M Y H:i') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium no-print">
                                <div class="flex space-x-2">
                                    <button onclick="updateStatus({{ $pesanan->id }})" class="text-blue-600 hover:text-blue-900" title="Update Status">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="printSingle({{ $pesanan->id }})" class="text-green-600 hover:text-green-900" title="Cetak Pesanan">
                                        <i class="fas fa-print"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center">
                                <div class="text-gray-500">
                                    <i class="fas fa-shopping-cart text-4xl mb-4"></i>
                                    <p class="text-lg font-medium">Belum ada pesanan</p>
                                    <p>Pesanan akan muncul di sini ketika ada yang memesan</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($pesanans->hasPages())
            <div class="bg-white px-6 py-4 border-t border-gray-200 no-print">
                {{ $pesanans->appends(request()->query())->links() }}
            </div>
        @endif
    </div>
</div>

<!-- Update Status Modal -->
<div id="statusModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center no-print">
    <div class="bg-white rounded-xl p-6 max-w-md mx-4">
        <div class="text-center">
            <i class="fas fa-edit text-blue-500 text-4xl mb-4"></i>
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Update Status Pesanan</h3>
            
            <form id="statusForm" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status Baru</label>
                    <select name="status" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="pending">Pending</option>
                        <option value="dikonfirmasi">Dikonfirmasi</option>
                        <option value="dikirim">Dikirim</option>
                        <option value="selesai">Selesai</option>
                        <option value="dibatalkan">Dibatalkan</option>
                    </select>
                </div>
                
                <div class="flex space-x-4">
                    <button type="button" onclick="closeStatusModal()" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded-lg transition-colors duration-200">
                        Batal
                    </button>
                    <button type="submit" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition-colors duration-200">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Hidden Print Template for Single Order -->
<div id="singlePrintTemplate" class="hidden print:block">
    <!-- Content will be populated by JavaScript -->
</div>

<style>
    @media print {
        .no-print {
            display: none !important;
        }
        
        body * {
            visibility: hidden;
        }
        
        #printArea, #printArea * {
            visibility: visible;
        }
        
        #printArea {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
        }
        
        .print-header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #333;
            padding-bottom: 20px;
        }
        
        .print-company {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        
        .print-subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }
        
        .print-date {
            font-size: 12px;
            color: #888;
        }
        
        .print-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .print-table th,
        .print-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        .print-table th {
            background-color: #f5f5f5;
            font-weight: bold;
        }
        
        .print-summary {
            margin-top: 30px;
            padding: 20px;
            border: 2px solid #333;
            background-color: #f9f9f9;
        }
        
        .print-single-order {
            padding: 20px;
            border: 1px solid #ddd;
            margin: 20px 0;
        }
        
        .print-order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        
        .print-order-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .print-order-items {
            margin-bottom: 20px;
        }
        
        .print-order-total {
            text-align: right;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    }
</style>

<script>
    function updateStatus(id) {
        document.getElementById('statusForm').action = `/admin/pesanan/${id}/update-status`;
        document.getElementById('statusModal').classList.remove('hidden');
    }
    
    function closeStatusModal() {
        document.getElementById('statusModal').classList.add('hidden');
    }
    
    function printAll() {
        // Create print content
        const printContent = `
            <div id="printArea">
                <div class="print-header">
                    <div class="print-company">VOURISTA</div>
                    <div class="print-subtitle">Laporan Pesanan</div>
                    <div class="print-date">Dicetak pada: ${new Date().toLocaleDateString('id-ID', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit'
                    })}</div>
                </div>
                
                <div class="print-summary">
                    <h3 style="margin-top: 0;">Ringkasan Laporan</h3>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                        <div>
                            <strong>Total Pesanan:</strong> {{ number_format($totalPesanan) }}<br>
                            <strong>Pending:</strong> {{ number_format($pendingCount) }}
                        </div>
                        <div>
                            <strong>Selesai:</strong> {{ number_format($selesaiCount) }}<br>
                            <strong>Total Pendapatan:</strong> Rp {{ number_format($totalRevenue, 0, ',', '.') }}
                        </div>
                    </div>
                </div>
                
                <table class="print-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pemesan</th>
                            <th>Produk</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${getTableRows()}
                    </tbody>
                </table>
            </div>
        `;
        
        // Create temporary element and print
        const originalContent = document.body.innerHTML;
        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContent;
        
        // Restore event listeners
        location.reload();
    }
    
    function getTableRows() {
        let rows = '';
        @foreach($pesanans as $pesanan)
            rows += `
                <tr>
                    <td>#{{ $pesanan->id }}</td>
                    <td>
                        <strong>{{ $pesanan->nama_pemesan }}</strong><br>
                        {{ $pesanan->no_hp }}<br>
                        <small>{{ Str::limit($pesanan->alamat, 50) }}</small>
                    </td>
                    <td>
                        @foreach($pesanan->detailPesanans as $detail)
                            {{ $detail->jumlah }}x {{ $detail->jajan->judul }}<br>
                        @endforeach
                    </td>
                    <td>
                        Subtotal: Rp {{ number_format($pesanan->subtotal_produk, 0, ',', '.') }}<br>
                        Ongkir: Rp {{ number_format($pesanan->ongkir, 0, ',', '.') }}<br>
                        <strong>Total: Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}</strong>
                    </td>
                    <td>{{ ucfirst($pesanan->status) }}<br><small>{{ $pesanan->metode_pembayaran }}</small></td>
                    <td>{{ $pesanan->tanggal_pesan->format('d M Y H:i') }}</td>
                </tr>
            `;
        @endforeach
        return rows;
    }
    
    function printSingle(id) {
        // Find the order data
        const orderData = getPesananById(id);
        if (!orderData) {
            alert('Data pesanan tidak ditemukan');
            return;
        }
        
        const printContent = `
            <div id="printArea">
                <div class="print-header">
                    <div class="print-company">VOURISTA</div>
                    <div class="print-subtitle">Detail Pesanan #${id}</div>
                    <div class="print-date">Dicetak pada: ${new Date().toLocaleDateString('id-ID', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit'
                    })}</div>
                </div>
                
                <div class="print-single-order">
                    <div class="print-order-header">
                        <div>
                            <h3 style="margin: 0;">Pesanan #${id}</h3>
                            <p style="margin: 5px 0; color: #666;">${orderData.tanggal}</p>
                        </div>
                        <div style="text-align: right;">
                            <span style="background: #e5e7eb; padding: 4px 8px; border-radius: 4px; font-size: 12px;">
                                ${orderData.status}
                            </span>
                        </div>
                    </div>
                    
                    <div class="print-order-details">
                        <div>
                            <h4 style="margin: 0 0 10px 0;">Informasi Pemesan</h4>
                            <p style="margin: 5px 0;"><strong>Nama:</strong> ${orderData.nama}</p>
                            <p style="margin: 5px 0;"><strong>No HP:</strong> ${orderData.noHp}</p>
                            <p style="margin: 5px 0;"><strong>Alamat:</strong> ${orderData.alamat}</p>
                        </div>
                        <div>
                            <h4 style="margin: 0 0 10px 0;">Informasi Pengiriman</h4>
                            <p style="margin: 5px 0;"><strong>Jarak:</strong> ${orderData.jarak} km</p>
                            <p style="margin: 5px 0;"><strong>Ongkir:</strong> Rp ${orderData.ongkir}</p>
                            <p style="margin: 5px 0;"><strong>Pembayaran:</strong> ${orderData.metodePembayaran}</p>
                        </div>
                    </div>
                    
                    <div class="print-order-items">
                        <h4 style="margin: 0 0 10px 0;">Produk Pesanan</h4>
                        <table class="print-table">
                            <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Jumlah</th>
                                    <th>Harga Satuan</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                ${orderData.items}
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="print-order-total">
                        <p style="margin: 5px 0;"><strong>Subtotal Produk:</strong> Rp ${orderData.subtotalProduk}</p>
                        <p style="margin: 5px 0;"><strong>Ongkos Kirim:</strong> Rp ${orderData.ongkir}</p>
                        <p style="margin: 10px 0 0 0; font-size: 18px; border-top: 1px solid #333; padding-top: 10px;">
                            <strong>Total Keseluruhan: Rp ${orderData.totalHarga}</strong>
                        </p>
                    </div>
                </div>
            </div>
        `;
        
        const originalContent = document.body.innerHTML;
        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContent;
        location.reload();
    }
    
    function getPesananById(id) {
        const pesananData = {
            @foreach($pesanans as $pesanan)
            {{ $pesanan->id }}: {
                nama: '{{ $pesanan->nama_pemesan }}',
                noHp: '{{ $pesanan->no_hp }}',
                alamat: '{{ $pesanan->alamat }}',
                jarak: '{{ $pesanan->jarak_km }}',
                ongkir: '{{ number_format($pesanan->ongkir, 0, ",", ".") }}',
                metodePembayaran: '{{ $pesanan->metode_pembayaran }}',
                status: '{{ ucfirst($pesanan->status) }}',
                tanggal: '{{ $pesanan->tanggal_pesan->format("d M Y H:i") }}',
                subtotalProduk: '{{ number_format($pesanan->subtotal_produk, 0, ",", ".") }}',
                totalHarga: '{{ number_format($pesanan->total_harga, 0, ",", ".") }}',
                items: `
                    @foreach($pesanan->detailPesanans as $detail)
                        <tr>
                            <td>{{ $detail->jajan->judul }}</td>
                            <td>{{ $detail->jumlah }}</td>
                            <td>Rp {{ number_format($detail->jajan->harga, 0, ",", ".") }}</td>
                            <td>Rp {{ number_format($detail->subtotal, 0, ",", ".") }}</td>
                        </tr>
                    @endforeach
                `
            },
            @endforeach
        };
        
        return pesananData[id] || null;
    }
</script>
@endsection