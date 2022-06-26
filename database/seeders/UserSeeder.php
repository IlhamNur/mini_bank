<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Ilham Nur',
            'email' => 'ilhamnurr@student.uns.ac.id',
            'password' => bcrypt('ilhamnur123#')
        ]);

        $admin->assignRole('admin');

        $nasabah = User::create([
            'name' => 'Kristian Pradana',
            'email' => 'iankristian@student.uns.ac.id',
            'password' => bcrypt('iankristian123#')
        ]);

        $nasabah->assignRole('nasabah');

        $cs = User::create([
            'name' => 'Farrel Naufal',
            'email' => 'farnoov@student.uns.ac.id',
            'password' => bcrypt('farrelnaufal123#')
        ]);

        $cs->assignRole('cs');

        $teller = User::create([
            'name' => 'Galih Putri',
            'email' => 'galputri@student.uns.ac.id',
            'password' => bcrypt('galihputri123#')
        ]);

        $teller->assignRole('teller');
    }

}
