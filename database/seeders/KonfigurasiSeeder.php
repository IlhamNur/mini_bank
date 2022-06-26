<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Konfigurasi;

class KonfigurasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Konfigurasi::create([
            'code' => 'name',
            'value' => 'MINK',
        ]);    

        Konfigurasi::create([
            'code' => 'alamat',
            'value' => 'Mini Bank, Jl. Ir. Sutami No. 36, Kentingan, Kec. Jebres, Kota Surakarta, Jawa Tengah - 57126.',
        ]); 
        
        Konfigurasi::create([
            'code' => 'telp',
            'value' => '0721-8191981',
        ]);    

        Konfigurasi::create([
            'code' => 'wa',
            'value' => '+6281818818',
        ]);   
        
        Konfigurasi::create([
            'code' => 'logo',
            'value' => 'assets/images/logo.png',
        ]);  

        Konfigurasi::create([
            'code' => 'email',
            'value' => 'minibank.id@gmail.com',
        ]);  
    }
}
