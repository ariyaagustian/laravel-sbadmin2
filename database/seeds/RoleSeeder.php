<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'superadmin',
            'id' => 1
        ]);
        DB::table('roles')->insert([
            'role_name' => 'dokter',
            'id' => 2
        ]);
        DB::table('roles')->insert([
            'role_name' => 'client',
            'id' => 3
        ]);
    }
}
