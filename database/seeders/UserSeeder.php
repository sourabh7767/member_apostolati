<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $isAdminExist = DB::table('users')->where(['role' => User::ROLE_ADMIN])->count();
        if(!$isAdminExist){
            //$adminRole = DB::table('roles')->where(['is_deleteable' => 0])->first();
            DB::table('users')->insert([
                'full_name' => 'Admin',
                'email' => 'admin@yopmail.com',
                'phone_number' => '123456789',
                'role' => User::ROLE_ADMIN,
                'password' => Hash::make('admin@123')
            ]);
            DB::table('users')->insert([
                'full_name' => 'laksh',
                'email' => 'laksh@yopmail.com',
                'phone_number' => '123456787',
                'role' => User::ROLE_USER,
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('admin@123')
            ]);
            DB::table('users')->insert([
                'full_name' => 'preet',
                'email' => 'preet@yopmail.com',
                'phone_number' => '123456779',
                'role' => User::ROLE_USER,
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('admin@123')
            ]);
            DB::table('users')->insert([
                'full_name' => 'sammy',
                'email' => 'sammy@yopmail.com',
                'phone_number' => '123459789',
                'role' => User::ROLE_USER,
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('admin@123')
            ]);
        }
    }
}
