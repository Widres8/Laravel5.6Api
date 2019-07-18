<?php

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'first_name'        => 'Admin',
            'last_name'         => 'Admin',
            'email'             => 'admin@sysley.com',
            'document_type'     => 'CC',
            'document'          => '12345678',
            'address'           => 'Calle',
            'mobile'            => '12345678',
            'password'          => 'Admin123.',
            'remember_token'    => str_random(10),
            'active'            => true,
            'is_verified'       => 1,
            'created_by'        => 1,
        ])->attachRole(1);
    }
}
