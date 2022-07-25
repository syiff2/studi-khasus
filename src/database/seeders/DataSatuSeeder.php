<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataSatu;

class DataSatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datasatu = [
            [
                'nama'           => 'satu',
            ],
            [
                'nama'           => 'dua',
            ],
            [
                'nama'           => 'tiga',
            ],
            [
                'nama'           => 'empat',
            ],
        ];

        DataSatu::insert($datasatu);
    }
}
