<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bus;
use \App\Models\User;
use App\Models\Pemesan;
use \App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'default User',
            'email' => 'nurhavid123@gmail.com',
            'password' =>  bcrypt('123')
        ]);
        Pemesan::factory(10)->create();

        Pemesan::factory()->create([
            'nama' => 'aaa',
            'alamat' => 'ssss',
            'no_tlp' => '432323',
            'jumlah_tiket' => '32'
        ]);

        Kategori::factory()->create([
            'kategori' => 'Ekonomi',
            'harga' => 6000
        ],);
        Kategori::factory()->create([
            'kategori' => 'Patas',
            'harga' => 8000
        ]);
        Kategori::factory()->create([
            'kategori' => 'Bisnis',
            'harga' => 12000
        ]);
        Kategori::factory()->create([
            'kategori' => 'Executive',
            'harga' => 14000
        ]);
        Bus::factory(10)->create();

    }
}
