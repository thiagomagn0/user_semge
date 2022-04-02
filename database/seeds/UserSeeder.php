<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "root",
            'email' => "root@semge.com.br",
            'admin' => "1",
            'password' => Hash::make('123mudar'),
            'created_at' => "2022-03-31 17:54:59"
        ]);
    }
}
