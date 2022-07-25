<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataEmpatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $datatiga = [
                [
                    'nama'           => 'satu.satu.satu.satu',
                ]
            ];
            DataTiga::insert($datatiga);
        }
    }
}
