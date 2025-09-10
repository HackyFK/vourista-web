<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Jajan;
use App\Models\Rating;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        Admin::create([
            'username' => 'admin1',
            'password' => 'password123',
        ]);

        // Create sample jajans with updated food list and harga
        // $jajans = [
        //     [
        //         'judul' => 'Kue Sus',
        //         'deskripsi_singkat' => 'Kue sus lembut dengan isian cream vanilla',
        //         'deskripsi_lengkap' => 'Kue sus dengan tekstur choux pastry yang lembut dan mengembang sempurna. Diisi dengan cream vanilla yang creamy dan tidak terlalu manis. Cocok untuk camilan sore atau hidangan penutup.',
        //         'harga' => 15000.00,
        //         'gambar' => 'kue-sus.jpg'
        //     ],
        //     [
        //         'judul' => 'Donat',
        //         'deskripsi_singkat' => 'Donat empuk dengan glazur manis dan topping beragam',
        //         'deskripsi_lengkap' => 'Donat dengan tekstur yang empuk dan mengembang sempurna. Tersedia dengan berbagai varian glazur seperti coklat, strawberry, dan vanilla. Ditaburi dengan topping menarik seperti sprinkles warna-warni dan kacang cincang.',
        //         'harga' => 12000.00,
        //         'gambar' => 'donat.jpg'
        //     ],
        //     [
        //         'judul' => 'Pie Buah',
        //         'deskripsi_singkat' => 'Pie dengan isian buah segar dan kulit pastry renyah',
        //         'deskripsi_lengkap' => 'Pie dengan kulit pastry yang renyah dan buttery, diisi dengan berbagai buah segar seperti apel, strawberry, dan blueberry. Buah dipilih yang matang sempurna untuk memberikan rasa manis alami yang segar.',
        //         'harga' => 25000.00,
        //         'gambar' => 'pie-buah.jpg'
        //     ],
        //     [
        //         'judul' => 'Sate Telur Puyuh',
        //         'deskripsi_singkat' => 'Sate telur puyuh dengan bumbu kecap manis',
        //         'deskripsi_lengkap' => 'Telur puyuh rebus yang ditusuk dan dipanggang dengan bumbu kecap manis yang khas. Disajikan hangat dengan taburan bawang goreng dan sambal kecap. Cocok sebagai camilan kenyang dan berprotein tinggi.',
        //         'harga' => 10000.00,
        //         'gambar' => 'sate-telur-puyuh.jpg'
        //     ],
        //     [
        //         'judul' => 'Arem Arem',
        //         'deskripsi_singkat' => 'Nasi gurih dengan isian sayur dan lauk dalam daun pisang',
        //         'deskripsi_lengkap' => 'Makanan tradisional berupa nasi gurih yang dibungkus daun pisang dengan isian sayur urap, tempe goreng, dan sambal. Memberikan cita rasa autentik Indonesia dengan aroma daun pisang yang khas.',
        //         'harga' => 8000.00,
        //         'gambar' => 'arem-arem.jpg'
        //     ]
        // ];

        // // Create jajans and store them for rating seeding
        // $createdJajans = [];
        // foreach ($jajans as $jajanData) {
        //     $createdJajans[] = Jajan::create($jajanData);
        // }

        // // Sample reviews
        // $sampleReviews = [
        //     'Enak banget! Renyah dan gurih, pasti beli lagi',
        //     'Rasanya autentik, mengingatkan pada masa kecil',
        //     'Kemasan rapi, rasa sesuai ekspektasi',
        //     'Harga terjangkau dengan kualitas oke',
        //     'Manis pas, tidak terlalu berlebihan',
        //     'Teksturnya perfect, crispy di luar lembut di dalam',
        //     'Bumbunya meresap sempurna, recommended!',
        //     'Porsi pas untuk camilan, rasanya nagih',
        //     'Kualitas terjaga, selalu fresh',
        //     'Jajanan tradisional yang tetap eksis',
        //     'Cocok buat oleh-oleh, packaging menarik',
        //     'Rasa otentik Indonesia yang harus dicoba',
        //     '', '', ''
        // ];

        // // Create ratings
        // foreach ($createdJajans as $jajan) {
        //     $ratingCount = rand(5, 15);

        //     for ($i = 0; $i < $ratingCount; $i++) {
        //         Rating::create([
        //             'jajan_id' => $jajan->id,
        //             'nilai' => rand(6, 10),
        //             'ulasan' => $sampleReviews[array_rand($sampleReviews)],
        //             'created_at' => now()->subDays(rand(1, 30)),
        //             'updated_at' => now()->subDays(rand(1, 30)),
        //         ]);
        //     }
        // }

        // // Add some lower ratings
        // foreach ($createdJajans as $jajan) {
        //     if (rand(1, 5) == 1) {
        //         Rating::create([
        //             'jajan_id' => $jajan->id,
        //             'nilai' => rand(3, 5),
        //             'ulasan' => collect([
        //                 'Kurang sesuai selera saya',
        //                 'Terlalu asin/manis',
        //                 'Kemasan bisa diperbaiki',
        //                 'Harga sedikit mahal',
        //                 ''
        //             ])->random(),
        //             'created_at' => now()->subDays(rand(1, 30)),
        //             'updated_at' => now()->subDays(rand(1, 30)),
        //         ]);
        //     }
        // }

        // echo "✅ Database seeded successfully!\n";
        // echo "📊 Created:\n";
        // echo "   - 1 Admin user (username: admin1, password: password123)\n";
        // echo "   - " . count($jajans) . " Jajanan items\n";
        // echo "   - " . Rating::count() . " Sample ratings\n";
        // echo "   - " . Rating::whereNotNull('ulasan')->where('ulasan', '!=', '')->count() . " Reviews with text\n";
    }
}
