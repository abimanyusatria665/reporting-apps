<?php

namespace Database\Seeders;

use App\Models\Subdistrict;
use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubdistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subdistrict1 = Subdistrict::create([
            'name' => 'Kecamatan 1'
        ]);
        $subdistrict2 = Subdistrict::create([
            'name' => 'Kecamatan 2'
        ]);
        $subdistrict3 = Subdistrict::create([
            'name' => 'Kecamatan 3'
        ]);

        Village::create([
            'subdistrict_id' => $subdistrict1->id,
            'name' => 'Desa 1'
        ]);
        Village::create([
            'subdistrict_id' => $subdistrict1->id,
            'name' => 'Desa 2'
        ]);
        Village::create([
            'subdistrict_id' => $subdistrict1->id,
            'name' => 'Desa 3'
        ]);
        Village::create([
            'subdistrict_id' => $subdistrict1->id,
            'name' => 'Desa 4'
        ]);
        Village::create([
            'subdistrict_id' => $subdistrict1->id,
            'name' => 'Desa 5'
        ]);
        Village::create([
            'subdistrict_id' => $subdistrict1->id,
            'name' => 'Desa 6'
        ]);
    }
}
