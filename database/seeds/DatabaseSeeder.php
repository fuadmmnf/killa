<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
        \App\User::create([
           'name' => 'fuadmmnf',
            'activation_status' => 1,
            'unique_key' => 'fuadmmnf',
            'role' => 'admin',
            'type' => 'admin',
            'email' => 'fuadmmnf@gmail.com',
            'phone' => '01956572070',
            'bio' => 'student',
            'image' => 'default',
            'password' => \Illuminate\Support\Facades\Hash::make('fuadmmnf')
        ]);
    }
}
