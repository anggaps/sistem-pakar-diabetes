<?php

namespace Database\Seeders;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Rule as ModelsRule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Rule extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsRule::create([
            'penyakit_id' => Penyakit::where('name', 'Diabetes Tipe 1')->first()->id,
            'gejala_id' => Gejala::where('name', 'Sering merasa haus')->first()->id,
        ]);

        ModelsRule::create([
            'penyakit_id' => Penyakit::where('name', 'Diabetes Tipe 1')->first()->id,
            'gejala_id' => Gejala::where('name', 'Sering buang air kecil')->first()->id,
        ]);

        ModelsRule::create([
            'penyakit_id' => Penyakit::where('name', 'Diabetes Tipe 2')->first()->id,
            'gejala_id' => Gejala::where('name', 'Kelelahan')->first()->id,
        ]);

        ModelsRule::create([
            'penyakit_id' => Penyakit::where('name', 'Diabetes Tipe 2')->first()->id,
            'gejala_id' => Gejala::where('name', 'Penglihatan kabur')->first()->id,
        ]);

        ModelsRule::create([
            'penyakit_id' => Penyakit::where('name', 'Diabetes Gestasional')->first()->id,
            'gejala_id' => Gejala::where('name', 'Rasa lapar berlebihan')->first()->id,
        ]);

        ModelsRule::create([
            'penyakit_id' => Penyakit::where('name', 'Diabetes Gestasional')->first()->id,
            'gejala_id' => Gejala::where('name', 'Luka yang sulit sembuh')->first()->id,
        ]);
    }
}
