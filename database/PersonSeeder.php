<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use App\Models\Person;

class PersonSeeder{
    
    public static function Seed(){

        DB::table('person')->delete();
        // protected $fillable = ['id', 'name', 'phone', 'note', 'debit', 'credit', 'balance', 'accountId'];

        $people = [         

            [
                'id' => '1',
                'name' => 'Mostafa Hamwi',
            ],[
                'id' => '2',
                'name' => 'Yahya Hariri',
            ],[
                'id' => '3',
                'name' => 'Abo Yazan',
            ],[
                'id' => '4',
                'name' => 'Jak Kozaily',
            ],[
                'id' => '5',
                'name' => 'Abo hasan',
            ],[
                'id' => '6',
                'name' => 'Nizam Haider',
            ],[
                'id' => '7',
                'name' => 'Nutrion ella',
            ],
            
           
        ];

        foreach($people as $person){
            Person::create($person);
        }
    }
}

