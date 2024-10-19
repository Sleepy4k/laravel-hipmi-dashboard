<?php

namespace Database\Seeders;

use App\Models\LandingType;
use Illuminate\Database\Seeder;

class LandingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (LandingType::query()->withoutCache()->count() == 0) {
            $data = LandingType::factory()->make();

            LandingType::insert($data->toArray());
        }
    }
}
