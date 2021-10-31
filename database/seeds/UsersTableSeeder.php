<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'role_id' =>'1',
            'name' =>'Admin',
            'username' =>'admin',
            'email' =>'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('users')->insert([
            'role_id' =>'2',
            'name' =>'Author',
            'username' =>'author',
            'email' =>'author@gmail.com',
            'password' => Hash::make('author123')
        ]);
        DB::table('users')->insert([
            'role_id' =>'3',
            'name' =>'Editor',
            'username' =>'editor',
            'email' =>'editor@gmail.com',
            'password' => Hash::make('editor123')
        ]);
        DB::table('users')->insert([
            'role_id' =>'4',
            'name' =>'Moderator',
            'username' =>'moderator',
            'email' =>'moderator@gmail.com',
            'password' => Hash::make('moderator123')
        ]);
        DB::table('users')->insert([
            'role_id' =>'5',
            'name' =>'Advertiser',
            'username' =>'advertiser',
            'email' =>'advertiser@gmail.com',
            'password' => Hash::make('advertiser123')
        ]);
        DB::table('users')->insert([
            'role_id' =>'6',
            'name' =>'Analyst',
            'username' =>'analyst',
            'email' =>'analyst@gmail.com',
            'password' => Hash::make('analyst123')
        ]);

    }
}
