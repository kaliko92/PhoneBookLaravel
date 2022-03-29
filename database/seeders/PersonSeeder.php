<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use App\Models\Person;

class PersonSeeder{
    
    public static function Seed(){

        DB::table('person')->delete();

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
            ],[
                'id' => '8',
                'name' => 'Shadi nazem',
            ],[
                'id' => '9',
                'name' => 'Rawad imad',
            ],[
                'id' => '10',
                'name' => 'Abd shalah',
            ],[
                'id' => '11',
                'name' => 'Rawan nadini',
            ],[
                'id' => '12',
                'name' => 'Tamer assad',
            ],[
                'id' => '13',
                'name' => 'Samir hasan',
            ],[
                'id' => '14',
                'name' => 'Mostafa khaled',
            ],[
                'id' => '15',
                'name' => 'Mostafa monzer',
            ],[
                'id' => '16',
                'name' => 'Yaser husein',
            ],[
                'id' => '17',
                'name' => 'Ahmed Taha',
            ],[
                'id' => '18',
                'name' => 'Rami Mobaid',
            ],[
                'id' => '19',
                'name' => 'Ramez Ahmed',
            ],[
                'id' => '20',
                'name' => 'Moaz Joman',
            ]
            
           
        ];

        foreach($people as $person){
            Person::create($person);
        }
    }
}

