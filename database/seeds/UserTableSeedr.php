<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Cashier',
            'email' => 'cashier@gmail.com',
            'password' => Hash::make('admin@123'),
            'cashier'=>'1',
        ]);
        DB::table('users')->insert([
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'password' => Hash::make('admin@123'),
            'owner'=>'1',
        ]);
        DB::table('users')->insert([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('admin@123'),
            'owner'=>'1',
        ]);
        
            
        
    }
}
