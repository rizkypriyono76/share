<?php

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
        // reset user table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //generate 3user/author
        DB::table('users')->insert([
            [
                'name' => "jhon doe",
                'email' => "jhon@test.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "jhon doe1",
                'email' => "jhon1@test.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "jhon doe2",
                'email' => "jhon2@test.com",
                'password' => bcrypt('secret')
            ],
        ]);

    }
}
