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
            'name'  =>'Tiago',
            'email' =>'tiago@teste.com',
            'password'  =>bcrypt('teste'),
            'categoria' =>'A',
        ]);
    }
}
