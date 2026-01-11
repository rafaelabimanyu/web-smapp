<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Optional: user default
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Panggil semua seeder Prestasiprima
        $this->call([
            PrestasiprimaCategorySeeder::class,
            PrestasiprimaStaffSeeder::class,
            PrestasiprimaNewsSeeder::class,
            PrestasiprimaKegiatanSeeder::class,
            PrestasiprimaPrestasiSeeder::class,
            PrestasiprimaGallerySeeder::class,
        ]);
    }
}
