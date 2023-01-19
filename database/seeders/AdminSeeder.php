<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id=DB::table('admins')->insertGetId([
            'first_name' => 'Super',
            'last_name'=>'Admin',
            'email'=>'superadmin@fantom.com',
            'password' => Hash::make('Fantom@2023'),
            'mobile'=>'',
        ]);
        DB::table("user_roles")->insert(["admin_id"=>$user_id,"role_id"=>"1"]);

        $user_id=DB::table('admins')->insertGetId([
            'first_name' => 'Admin',
            'last_name'=>'Admin',
            'email'=>'admin@fantom.com',
            'password' => Hash::make('Fantom@2023'),
            'mobile'=>'',
        ]);
        DB::table("user_roles")->insert(["admin_id"=>$user_id,"role_id"=>"2"]);

        $user_id=DB::table('admins')->insertGetId([
            'first_name' => 'Distributor',
            'last_name'=>'Admin',
            'email'=>'distributor@fantom.com',
            'password' => Hash::make('Fantom@2023'),
            'mobile'=>'',
        ]);
        DB::table("user_roles")->insert(["admin_id"=>$user_id,"role_id"=>"3"]);

        $user_id=DB::table('admins')->insertGetId([
            'first_name' => 'Exhibitor',
            'last_name'=>'Admin',
            'email'=>'exhibitor@fantom.com',
            'password' => Hash::make('Fantom@2023'),
            'mobile'=>'',
        ]);
        DB::table("user_roles")->insert(["admin_id"=>$user_id,"role_id"=>"4"]);

        $user_id=DB::table('admins')->insertGetId([
            'first_name' => 'Programmer',
            'last_name'=>'Admin',
            'email'=>'programmer@fantom.com',
            'password' => Hash::make('Fantom@2023'),
            'mobile'=>'',
        ]);
        DB::table("user_roles")->insert(["admin_id"=>$user_id,"role_id"=>"5"]);

        $user_id=DB::table('admins')->insertGetId([
            'first_name' => 'Lab',
            'last_name'=>'Admin',
            'email'=>'lab@fantom.com',
            'password' => Hash::make('Fantom@2023'),
            'mobile'=>'',
        ]);
        DB::table("user_roles")->insert(["admin_id"=>$user_id,"role_id"=>"6"]);

        $user_id=DB::table('admins')->insertGetId([
            'first_name' => 'Cloning Agent',
            'last_name'=>'Admin',
            'email'=>'cloningagent@fantom.com',
            'password' => Hash::make('Fantom@2023'),
            'mobile'=>'',
        ]);
        DB::table("user_roles")->insert(["admin_id"=>$user_id,"role_id"=>"7"]);

    }
}
