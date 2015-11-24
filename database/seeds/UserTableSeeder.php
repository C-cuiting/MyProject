<?php
use IlluminateDatabaseSeeder;
use AppUser;
use AppGrade;

class UserTableSeeder extends Seeder {
    /**      * Run the database seeds.      *      * @return void      */
    public function run()     {
        DB::table('users')->delete();
        Users::create([
            'id' => 1210311232,
            'name' => '李锐',
            'password' => Hash::make('1210311232')
        ]);
        Users::create([
            'id' => 1210311233,
            'name' => '陈曦',
            'password' => Hash::make('1210311233')
        ]);
        Users::create([
            'id' => 1234567890,
            'name' => '管理员',
            'password' => Hash::make('root'),
            'is_admin' => 1
        ]);
    }  }