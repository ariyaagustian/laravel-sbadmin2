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
            'name' => 'Superadmin',
            'email' => 'superadmin@domain.com',
            'password' => \Hash::make('Salamadmin123!'),
            'email_verified_at' => now(),
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
