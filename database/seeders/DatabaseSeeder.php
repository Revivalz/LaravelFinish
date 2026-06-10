<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ToDo;
use App\Models\Country;
use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $countries = Country::factory()->count(5)->create();

        for ($i = 0; $i < 20; $i++) {
            City::factory()->create([
                'country_id' => $countries->random()->id,
            ]);
        }
    }
}
