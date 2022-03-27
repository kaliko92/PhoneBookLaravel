<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use App\Models\User;

class UserSeeder{
    
    public static function Seed(){
        DB::table('users')->delete();

        $users = [         

            [
                'name' => 'kaeo',
                'email' => 'kaeo@hotmail.com',
                'password' => bcrypt('temer!37'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                // 'role' => 'kaeo'
            ],[
                'name' => 'Administrator',
                'email' => 'admin@app.com',
                'password' => bcrypt('123456789'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'ihsan',
                'email' => 'ihsan@app.com',
                'password' => bcrypt('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ali',
                'email' => 'ali@app.com',
                'password' => bcrypt('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],[
                'name' => 'ahmad',
                'email' => 'ahmad@app.com',
                'password' => bcrypt('password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'omar',
                'email' => 'omar@hotmail.com',
                'password' => bcrypt('123456789'),
                // 'role' => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        foreach($users as $user){
            User::create($user);
        }
      
    }
}


