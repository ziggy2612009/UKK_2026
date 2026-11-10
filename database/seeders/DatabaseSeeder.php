<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => 'password', 'role' => 'admin']);
        User::create(['name' => 'Dimas', 'email' => 'aydin@gmail.com', 'password' => 'ziggy01', 'role' => 'siswa', 'kelas' => 'XII RPL 4']);

        Book::create(['title' => 'Buku matematika', 'author' => 'Andre', 'publisher' => 'Bintang', 'year' => 2025, 'stock' => 5]);
        Book::create(['title' => 'Block clover', 'author' => 'zaki', 'publisher' => 'Erlangga', 'year' => 2026, 'stock' => 7]);
        Book::create(['title' => 'Belajar coding', 'author' => 'qismat', 'publisher' => 'Informatika', 'year' => 2021, 'stock' => 10]);
    }
}