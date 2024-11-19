<?php

namespace Database\Seeders;

use App\Models\kategori;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        
       User::create([
        'nama' =>'Administrator',
        'email' =>'admin@gmail.com',
        'role' =>'1',
        'status' => 1,
        'hp' => '089533104568',
        'password' => ('bsi06')
       ]);
       
       User::create([
        'nama' =>'abni basit munawar',
        'email' =>'`abni213@gmail.com`',
        'role' =>'0',
        'status' => 1,
        'hp' =>'08953310549',
        'password' => bcrypt('abnibasit')
       ]);
       #data kategori 
        kategori::create([ 
        'nama_kategori' => 'Brownies', 
        ]); 
        Kategori::create([ 
        'nama_kategori' => 'Combro', 
        ]); 
        Kategori::create([ 
        'nama_kategori' => 'Dawet', 
        ]); 
        Kategori::create([ 
        'nama_kategori' => 'Mochi', 
        ]); 
        Kategori::create([ 
        'nama_kategori' => 'Wingko', 
        ]); 
    }
}