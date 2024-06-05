<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Prodi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        Prodi::create([
            'nama_prodi' => 'Bisnis Digital',
        ]);

        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika',
          ]);

          Prodi::factory(10)->create();
    }
}