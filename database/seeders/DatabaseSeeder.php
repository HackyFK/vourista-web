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
    'password' => Hash::make('password123'),
]);

Admin::create([
    'username' => 'mugi',
    'password' => Hash::make('mulyati'),
]);

        // Create sample jajans with more variety
        $jajans = [
            [
                'judul' => 'Keripik Singkong',
                'deskripsi_singkat' => 'Keripik singkong renyah dengan berbagai rasa',
                'deskripsi_lengkap' => 'Keripik singkong yang dibuat dari singkong pilihan dengan proses penggorengan yang sempurna. Tersedia dalam berbagai varian rasa seperti original, pedas, dan barbeque. Cocok untuk camilan di berbagai acara.',
                'gambar' => 'keripik-singkong.jpg'
            ],
            [
                'judul' => 'Rempeyek Kacang',
                'deskripsi_singkat' => 'Rempeyek kacang tanah yang gurih dan renyah',
                'deskripsi_lengkap' => 'Rempeyek tradisional yang dibuat dengan kacang tanah pilihan dan bumbu rempah yang khas. Cocok sebagai teman makan nasi atau camilan santai. Dibuat dengan resep turun temurun yang autentik.',
                'gambar' => 'rempeyek-kacang.jpg'
            ],
            [
                'judul' => 'Kue Lapis Legit',
                'deskripsi_singkat' => 'Kue lapis legit dengan rasa yang manis',
                'deskripsi_lengkap' => 'Kue lapis legit yang dibuat dengan resep turun temurun, memiliki tekstur yang lembut dan rasa yang manis. Perfect untuk acara spesial atau sebagai oleh-oleh khas Indonesia.',
                'gambar' => 'kue-lapis.jpg'
            ],
            [
                'judul' => 'Onde-onde',
                'deskripsi_singkat' => 'Onde-onde isi kacang hijau yang legit',
                'deskripsi_lengkap' => 'Onde-onde tradisional dengan kulit kenyal dari tepung ketan dan isian kacang hijau yang manis. Dilapisi wijen putih yang memberikan tekstur renyah di luar.',
                'gambar' => 'onde-onde.jpg'
            ],
            [
                'judul' => 'Pisang Goreng',
                'deskripsi_singkat' => 'Pisang goreng crispy dengan tepung special',
                'deskripsi_lengkap' => 'Pisang goreng dengan adonan tepung khusus yang menghasilkan tekstur crispy di luar dan lembut di dalam. Menggunakan pisang kepok pilihan yang matang sempurna.',
                'gambar' => 'pisang-goreng.jpg'
            ],
            [
                'judul' => 'Kue Cubit',
                'deskripsi_singkat' => 'Kue cubit mini dengan topping beragam',
                'deskripsi_lengkap' => 'Kue cubit kecil-kecil yang lucu dengan berbagai topping menarik seperti coklat, keju, dan kacang. Teksturnya lembut dan rasanya manis, cocok untuk anak-anak.',
                'gambar' => 'kue-cubit.jpg'
            ],
            [
                'judul' => 'Kerupuk Udang',
                'deskripsi_singkat' => 'Kerupuk udang asli yang gurih dan renyah',
                'deskripsi_lengkap' => 'Kerupuk udang berkualitas tinggi yang dibuat dari udang asli dengan proses tradisional. Memiliki rasa gurih yang khas dan tekstur yang sangat renyah.',
                'gambar' => 'kerupuk-udang.jpg'
            ],
            [
                'judul' => 'Martabak Mini',
                'deskripsi_singkat' => 'Martabak mini dengan isian telur dan daging',
                'deskripsi_lengkap' => 'Martabak mini praktis dengan isian telur, daging cincang, dan daun bawang. Ukurannya pas untuk sekali makan dan cocok sebagai camilan kenyang.',
                'gambar' => 'martabak-mini.jpg'
            ],
            [
                'judul' => 'Es Krim Goreng',
                'deskripsi_singkat' => 'Es krim goreng unik dengan sensasi dingin-hangat',
                'deskripsi_lengkap' => 'Inovasi unik es krim yang digoreng dengan balutan tepung khusus. Memberikan sensasi hangat di luar tapi dingin di dalam. Tersedia berbagai rasa es krim.',
                'gambar' => 'es-krim-goreng.jpg'
            ],
            [
                'judul' => 'Tahu Crispy',
                'deskripsi_singkat' => 'Tahu goreng crispy dengan bumbu rahasia',
                'deskripsi_lengkap' => 'Tahu yang digoreng dengan tepung berbumbu hingga crispy. Disajikan dengan sambal kacang dan kecap manis. Cocok untuk vegetarian dan memiliki cita rasa yang gurih.',
                'gambar' => 'tahu-crispy.jpg'
            ]
        ];

        // Create jajans and store them for rating seeding
        $createdJajans = [];
        foreach ($jajans as $jajanData) {
            $createdJajans[] = Jajan::create($jajanData);
        }

        // Create sample ratings for each jajan
        $sampleReviews = [
            'Enak banget! Renyah dan gurih, pasti beli lagi',
            'Rasanya autentik, mengingatkan pada masa kecil',
            'Kemasan rapi, rasa sesuai ekspektasi',
            'Harga terjangkau dengan kualitas oke',
            'Manis pas, tidak terlalu berlebihan',
            'Teksturnya perfect, crispy di luar lembut di dalam',
            'Bumbunya meresap sempurna, recommended!',
            'Porsi pas untuk camilan, rasanya nagih',
            'Kualitas terjaga, selalu fresh',
            'Jajanan tradisional yang tetap eksis',
            'Cocok buat oleh-oleh, packaging menarik',
            'Rasa otentik Indonesia yang harus dicoba',
            '', // Some ratings without reviews
            '',
            ''
        ];

        foreach ($createdJajans as $jajan) {
            // Create 5-15 random ratings for each jajan
            $ratingCount = rand(5, 15);
            
            for ($i = 0; $i < $ratingCount; $i++) {
                Rating::create([
                    'jajan_id' => $jajan->id,
                    'nilai' => rand(6, 10), // Most ratings are positive (6-10)
                    'ulasan' => $sampleReviews[array_rand($sampleReviews)], // Random review or empty
                    'created_at' => now()->subDays(rand(1, 30)), // Random dates within last 30 days
                    'updated_at' => now()->subDays(rand(1, 30)),
                ]);
            }
        }

        // Add some lower ratings to make it more realistic
        foreach ($createdJajans as $jajan) {
            // 20% chance to add some lower ratings
            if (rand(1, 5) == 1) {
                Rating::create([
                    'jajan_id' => $jajan->id,
                    'nilai' => rand(3, 5), // Lower ratings
                    'ulasan' => collect([
                        'Kurang sesuai selera saya',
                        'Terlalu asin/manis',
                        'Kemasan bisa diperbaiki',
                        'Harga sedikit mahal',
                        ''
                    ])->random(),
                    'created_at' => now()->subDays(rand(1, 30)),
                    'updated_at' => now()->subDays(rand(1, 30)),
                ]);
            }
        }

        echo "✅ Database seeded successfully!\n";
        echo "📊 Created:\n";
        echo "   - 1 Admin user (username: admin, password: password123)\n";
        echo "   - " . count($jajans) . " Jajanan items\n";
        echo "   - " . Rating::count() . " Sample ratings\n";
        echo "   - " . Rating::whereNotNull('ulasan')->where('ulasan', '!=', '')->count() . " Reviews with text\n";
    }
}