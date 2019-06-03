<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.ru',
            'password' => bcrypt('Totv12ka')
        ]);
    }
}
