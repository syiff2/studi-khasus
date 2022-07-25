<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataDua;

class DataDuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datadua = [
            [
                'nama'           => 'satu.satu',
            ],
            [
                'nama'           => 'satu.dua',
            ],
            [
                'nama'           => 'satu.tiga',
            ],
            [
                'nama'           => 'dua.satu',
            ],
            [
                'nama'           => 'dua.dua',
            ],
            [
                'nama'           => 'dua.tiga',
            ],
            [
                'nama'           => 'tiga.satu',
            ],
            [
                'nama'           => 'tiga.dua',
            ],
            [
                'nama'           => 'tiga.tiga',
            ],
            [
                'nama'           => 'empat.satu',
            ],
            [
                'nama'           => 'empat.dua',
            ],
            [
                'nama'           => 'empat.tiga',
            ],
        ];
        DataDua::insert($datadua);
    }
}
