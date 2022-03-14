<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use App\Models\Contact;

class ContactSeeder{
    
    public static function Seed(){

        DB::table('contact')->delete();
        // protected $fillable = ['id', 'name', 'phone', 'note', 'debit', 'credit', 'balance', 'accountId'];

        $contacts = [         

            [
                'id' => '1',
                'type' => 'phone',
                'value' => '03/775328',
                'personId' => 1,
            ],[
                'id' => '2',
                'type' => 'phone',
                'value' => '01/032519',
                'personId' => 1,
            ],[
                'id' => '3',
                'type' => 'phone',
                'value' => '03/120058',
                'personId' => 2,
            ],[
                'id' => '4',
                'type' => 'email',
                'value' => 'yahyahariri25@gmail.com',
                'personId' => 2,
            ],[
                'id' => '5',
                'type' => 'phone',
                'value' => '01/855521',
                'personId' => 3,
            ],[
                'id' => '6',
                'type' => 'phone',
                'value' => '03/775328',
                'personId' => 4,
            ],[
                'id' => '7',
                'type' => 'phone',
                'value' => '01/120011',
                'personId' => 5,
            ],[
                'id' => '8',
                'type' => 'phone',
                'value' => '81/125534',
                'personId' => 6,
            ],[
                'id' => '9',
                'type' => 'phone',
                'value' => '07/122221',
                'personId' => 7,
            ]
            
           
        ];

        foreach($contacts as $contact){
            Person::create($contact);
        }
    }
}

