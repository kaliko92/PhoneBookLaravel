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
                'type' => 'phone'
            ],[
                'id' => '2',
                'type' => 'email'
            ],[
                'id' => '3',
                'type' => 'facebook'
            ],[
                'id' => '4',
                'type' => 'twitter'
            ],[
                'id' => '5',
                'type' => 'instgram'
            ],[
                'id' => '6',
                'type' => 'tiktok'
            ],[
                'id' => '7',
                'type' => 'linkedin'
            ]
            
           
        ];

        foreach($contactTypes as $contactType){
            ContactType::create($contactType);
        }
    }
}

