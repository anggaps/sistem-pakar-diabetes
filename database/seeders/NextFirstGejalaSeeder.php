<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NextFirstGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rule::where('penyakit_id', 1)->update([
            'next_first_gejala_id' => 3, // Sesuaikan dengan gejala selanjutnya
        ]);

        Rule::where('penyakit_id', 2)->update([
            'next_first_gejala_id' => 4,
        ]);

        Rule::where('penyakit_id', 3)->update([
            'next_first_gejala_id' => 6,
        ]);
    }
}
