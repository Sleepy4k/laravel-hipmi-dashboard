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
        ];
    }
}
