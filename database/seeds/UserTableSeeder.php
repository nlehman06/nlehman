<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'     => 'Nathan Lehman',
            'email'         => 'nlehman06@gmail.com',
            'password'      => bcrypt('oOy6xIP1HLTu')
        ]);
    }
}
