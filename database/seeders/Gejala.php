<?php

namespace Database\Seeders;

use App\Models\Gejala as ModelsGejala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Gejala extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsGejala::create([
            'name' => 'Sering merasa haus',
            'image' => "10451236.jpg", // Ganti dengan nama file gambar yang sesuai
        ]);

        ModelsGejala::create([
            'name' => 'Sering buang air kecil',
            'image' => "10451236.jpg",
        ]);

        ModelsGejala::create([
            'name' => 'Kelelahan',
            'image' => "10451236.jpg",
        ]);

        ModelsGejala::create([
            'name' => 'Penglihatan kabur',
            'image' => "10451236.jpg",
        ]);

        ModelsGejala::create([
            'name' => 'Luka yang sulit sembuh',
            'image' => "10451236.jpg",
        ]);

        ModelsGejala::create([
            'name' => 'Rasa lapar berlebihan',
            'image' => "10451236.jpg",
        ]);

        ModelsGejala::create([
            'name' => 'Mual',
            'image' => "10451236.jpg",
        ]);

        ModelsGejala::create([
            'name' => 'Berkeringat berlebihan',
            'image' => "10451236.jpg",
        ]);

        ModelsGejala::create([
            'name' => 'Kulit gatal',
            'image' => "10451236.jpg",
        ]);
    }

}
