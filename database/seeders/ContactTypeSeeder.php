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
                'name' => 'phone'
            ],[
                'id' => '2',
                'name' => 'email'
            ],[
                'id' => '3',
                'name' => 'facebook'
            ],[
                'id' => '4',
                'name' => 'twitter'
            ],[
                'id' => '5',
                'name' => 'instgram'
            ],[
                'id' => '6',
                'name' => 'tiktok'
            ],[
                'id' => '7',
                'name' => 'linkedin'
            ]
            
           
        ];

        foreach($contactTypes as $contactType){
            ContactType::create($contactType);
        }
    }
}

