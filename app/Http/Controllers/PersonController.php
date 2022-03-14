<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Contact;

class PersonController extends Controller
{
    public function index()
    {       
        $data['people'] = Person::paginate(20);
        return view('admin.person.index', $data);
    }
    
    public function show($id)
    {
        $data['person'] = Person::find($id);
        $data['contacts'] = Contact::where('personId', $id)->get();
        // dd($data);
        // $day1s = Day1::where('personId', $id)->pluck('id')->toArray();
        // $data['day2ss'] = Day2::where([
        //     'accountId' => $data['person']->accountId,
        // ])->whereIn('day1Id' , $day1s)->get();
        return view('admin.person.show',$data);
    }
}
