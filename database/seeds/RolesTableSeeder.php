<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' =>'Admin',
            'slug' =>'admin',
        ]);
        DB::table('roles')->insert([
            'name' =>'Author',
            'slug' =>'author',
        ]);
        DB::table('roles')->insert([
            'name' =>'Editor',
            'slug' =>'editor',
        ]);
        DB::table('roles')->insert([
            'name' =>'Moderator',
            'slug' =>'moderator',
        ]);
        DB::table('roles')->insert([
            'name' =>'Advertiser',
            'slug' =>'advertiser',
        ]);
        DB::table('roles')->insert([
            'name' =>'Analyst',
            'slug' =>'analyst',
        ]);
    }
}
