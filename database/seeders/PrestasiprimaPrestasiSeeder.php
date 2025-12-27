<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\prestasiprima\Prestasi;

class PrestasiprimaPrestasiSeeder extends Seeder
{
    /**
     * Jalankan seeder data prestasi secara dinamis
     * berdasarkan jumlah file gambar.
     */
    public function run(): void
    {
        // Folder gambar prestasi
        $imagePath = public_path('assets/images/prestasi');

        if (!File::exists($imagePath)) {
            $this->command->error("❌ Folder tidak ditemukan: {$imagePath}");
            return;
        }

        // Ambil semua file gambar
        $files = collect(File::files($imagePath))
            ->filter(fn ($file) =>
                in_array(strtolower($file->getExtension()), ['png', 'jpg', 'jpeg', 'webp'])
            )
            ->values();

        if ($files->isEmpty()) {
            $this->command->warn('⚠️ Tidak ada file gambar prestasi.');
            return;
        }

        // Hapus data lama
        Prestasi::truncate();

        foreach ($files as $index => $file) {
            Prestasi::create([
                'judul' => 'Prestasi ' . ($index + 1),
                'deskripsi' => 'Deskripsi prestasi ke-' . ($index + 1) . ' SMA Prestasi Prima.',
                'gambar' => 'assets/images/prestasi/' . $file->getFilename(),
                'tanggal' => now()->subDays(rand(1, 365)),
            ]);
        }

        $this->command->info('✅ Seeder PrestasiprimaPrestasiSeeder berhasil!');
        $this->command->info('📸 Total prestasi dibuat: ' . $files->count());
    }
}
