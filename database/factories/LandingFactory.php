<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LandingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $externalLink = [
            [
                'name' => 'Telkom University Purwokerto',
                'url' => 'https://purwokerto.telkomuniversity.ac.id'
            ],
            [
                'name' => 'Beranda | HIPMI Badan Pengurus Daerah (BPD) Jawa Tengah',
                'url' => 'https://www.hipmijateng.org'
            ],
        ];

        $socialMedia = [
            [
                'title' => 'Instagram Profile',
                'type' => 'instagram',
                'url' => 'https://www.instagram.com/hipmi.ittp'
            ],
            [
                'title' => 'Youtube Account',
                'type' => 'youtube',
                'url' => null
            ],
        ];

        $visi = [
            [
                'title' =>  'Penguatan Jejaring dan Networking',
                'description' => 'Membangun ikatan kokoh antar-anggota HIPMI Perguruan Tinggi melalui kegiatan kolaboratif. Mendorong pertukaran pengalaman dan pengetahuan untuk nilai tambah dalam karir dan bisnis.'
            ],
            [
                'title' =>  'Fasilitas Mentoring',
                'description' => 'Implementasi program mentoring dari HIPMI Cabang Daerah dan Pusat. Memberikan panduan berharga melalui mentor-mentor berpengalaman untuk mengatasi tantangan bisnis.'
            ],
            [
                'title' =>  'Kemudahan Akses Modal',
                'description' => 'Fokus pada kemudahan akses modal bagi anggota yang memulai atau menghadapi kendala keuangan. Kemitraan strategis dengan lembaga keuangan untuk menyediakan pendanaan terjangkau. Pembentukan tim khusus untuk membantu menyusun proposal bisnis yang kuat.'
            ],
            [
                'title' =>  'Ekosistem Wirausaha Mahasiswa',
                'description' => 'Menciptakan ekosistem yang mendukung mahasiswa dalam memulai dan mengakselerasi bisnis. Memaksimalkan potensi dan akselesari usaha mahasiswa/mahasiswi.'
            ],
            [
                'title' =>  'Sebagai Wadah Kolaborasi',
                'description' => 'HIPMI PT Institut Teknologi Telkom Purwokerto sebagai wadah kolaborasi dan akselerasi usaha mahasiswa/mahasiswi. Mengutamakan nilai kekeluargaan, moral, integritas, dan profesionalisme.'
            ],
            [
                'title' =>  'Hubungan dan Kerjasama',
                'description' => 'Menjalin hubungan yang baik dalam relasi internal dan eksternal. Mendorong kolaborasi dan akselerasi demi kemajuan bersama.'
            ],
        ];

        return [
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'banner',
                'value' => 'https://pengajuan-dosenlb.telkomuniversity.ac.id/assets/images/telu_logo.png',
                'type_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'banner',
                'value' => 'https://pengajuan-dosenlb.telkomuniversity.ac.id/assets/images/telu_logo.png',
                'type_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'social.media',
                'value' => json_encode($socialMedia),
                'type_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'external.link',
                'value' => json_encode($externalLink),
                'type_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'header',
                'value' => "HIMPUNAN PENGUSAHA MUDA INDONESIA",
                'type_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'description',
                'value' => "<b>Himpunan Pengusaha Muda Indonesia</b> atau biasa dikenal dengan <b>HIPMI</b> merupakan sebuah organisasi independen yang merupakan kumpulan para pengusaha muda Indonesia yang bergerak dalam bidang perekonomian. Organisasi ini merupakan sebuah organisasi non-partisan yang mulai didirikan pada tanggal 19 Juni 1972.",
                'type_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'calendar',
                'value' => "https://calendar.google.com/calendar/embed?height=600&wkst=2&ctz=Asia%2FJakarta&bgcolor=%23ffffff&title=Kalender%20HIPMI%20TUP&src=Y18xYzIyZWUwN2YzMmQ4ZDg3OTk2N2M4N2MyMmFkODllYzQ5ZjdiNzhiMjM2NzZkMTY4MWJjZGYwZDUyN2RlMzYxQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=ZW4uaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%239E69AF&color=%234285F4",
                'type_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'kabinet',
                'value' => "Kabinet Danartapura",
                'type_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'description',
                'value' => "HIPMI PT ITelkom Purwokerto didirikan pada tahun 2024 oleh mahasiswa/mahasiswi yang memiliki minat dan bakat dalam bidang wirausaha. HIPMI PT Telkom Purwokerto merupakan wadah bagi mahasiswa-mahasiswi yang bertujuan untuk mentoring dan sharing seputar kegiatan wirausaha.",
                'type_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'slogan',
                'value' => "Pengusaha Penjuang, Pejuang Pengusaha",
                'type_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'misi',
                'value' => "Menjadikan HIPMI PT Institut Teknologi Telkom Purwokerto sebagai wadah kolaborasi untuk menciptakan lingkungan kampus entrepreneur dengan mahasiswa/mahasiswi yang unggul, kreatif, dan memiliki daya saing, dengan fokus pada<br><i><b>'Bridging Excellece, Fostering Social Entrepreneurs'</b></i>",
                'type_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'key' => 'visi',
                'value' => json_encode($visi),
                'type_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
    }
}
