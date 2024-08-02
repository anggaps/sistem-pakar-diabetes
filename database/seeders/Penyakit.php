<?php

namespace Database\Seeders;

use App\Models\Penyakit as ModelsPenyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Penyakit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsPenyakit::create([
            'name' => 'Diabetes Tipe 1',
            'reason' => 'Kekurangan insulin.',
            'solution' => 'Pengelolaan insulin dan diet yang tepat.',
            'image' => "190785420.jpg", // Ganti dengan nama file gambar yang sesuai
        ]);

        ModelsPenyakit::create([
            'name' => 'Diabetes Tipe 2',
            'reason' => 'Resistensi insulin.',
            'solution' => 'Perubahan gaya hidup, obat-obatan.',
            'image' => "190785420.jpg",
        ]);

        ModelsPenyakit::create([
            'name' => 'Diabetes Gestasional',
            'reason' => 'Hormon yang diproduksi selama kehamilan.',
            'solution' => 'Pemantauan glukosa dan diet yang sehat.',
            'image' => "190785420.jpg",
        ]);
    }

}
