<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use App\Models\ContactType;

class ContactTypeSeeder{
    
    public static function Seed(){

        DB::table('contactType')->delete();

        $contactTypes = [         

            [
                'id' => '1',
                'contactTypeId' => 1,
                'value' => '03/775328',
                'personId' => 1,
            ],[
                'id' => '2',
                'contactTypeId' => 1,
                'value' => '01/032519',
                'personId' => 1,
            ],[
                'id' => '3',
                'contactTypeId' => 1,
                'value' => '03/120058',
                'personId' => 2,
            ],[
                'id' => '4',
                'contactTypeId' => 2,
                'value' => 'yahyahariri25@gmail.com',
                'personId' => 2,
            ],[
                'id' => '5',
                'contactTypeId' => 1,
                'value' => '01/855521',
                'personId' => 3,
            ],[
                'id' => '6',
                'contactTypeId' => 1,
                'value' => '03/775328',
                'personId' => 4,
            ],[
                'id' => '7',
                'contactTypeId' => 1,
                'value' => '01/120011',
                'personId' => 5,
            ],[
                'id' => '8',
                'contactTypeId' => 1,
                'value' => '81/125534',
                'personId' => 6,
            ],[
                'id' => '9',
                'contactTypeId' => 1,
                'value' => '07/122221',
                'personId' => 7,
            ]
            
           
        ];

        foreach($contactTypes as $contactType){
            ContactType::create($contactType);
        }
    }
}

