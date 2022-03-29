<?php

namespace App\Http\Controllers;


use App\Models\Person;
use App\Models\Contact;
use App\Providers\AppServiceProvider;

class PersonController extends Controller
{
    public function index()
    {       
        $data['people'] = Person::paginate(5);        
        return view('admin.person.index', $data);
    }
    
    public function show($id)
    {
        $data['person'] = Person::find($id);
        $data['contacts'] = Contact::where('personId', $id)->get();           
        return view('admin.person.show',$data);
    }
}
