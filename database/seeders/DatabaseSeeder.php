<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Seeders\AdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment baris berikut jika ingin menggunakan factory untuk membuat user
        // \App\Models\User::factory(10)->create();
        $this -> call ([
            Users::Class
        ]);
        // Atau kamu bisa memanggil seeder lainnya di sini:
        // $this->call(UserSeeder::class); // Contoh memanggil seeder lainnya
    }
}
