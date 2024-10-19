<?php

namespace Database\Seeders;

use App\Models\Landing;
use Illuminate\Database\Seeder;

class LandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Landing::query()->withoutCache()->count() == 0) {
            $data = Landing::factory()->make();

            Landing::insert($data->toArray());
        }
    }
}
