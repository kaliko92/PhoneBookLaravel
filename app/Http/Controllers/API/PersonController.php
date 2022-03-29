<?php

namespace App\Http\Controllers\API;

use App\Models\Person;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PersonRequest;
use Response;

class PersonController extends Controller
{

    public function index()
    {
        $person = Person::all();
        return $this->ResponseSuccess(200, $person);
    }

    public function show($id)
    {
        $person = Person::find($id);
        if(is_null($person)){
            return $this->ResponseFailure(404, "Record not found!");
        }
        return $this->ResponseSuccess(200, $person);
    }

    public function store(PersonRequest $request)
    {     
        $newPerson = Person::create([
            'name' => $request->get('name')        
        ]);

        return $this->ResponseSuccess(201, $newPerson);
    }

    public function update(PersonRequest $request, $id)
    {        
        $person= Person::find($id);

        if(is_null($person)){
            return $this->ResponseFailure(404, "Record not found!");
        }

        $person->update([            
            'name' => $request->name    
        ]);

        $person->save();

        return $this->ResponseSuccess(200, $person);
    }  


    public function destroy($id)
    {     

        $contacts = Contact::where('personId', $id)->get();
        foreach ($contacts as $conn) {
            $conn->delete();
        }
        $person = Person::find($id);
        $person->delete();
    
        return $this->ResponseSuccess(204, $person::all());
    }

    public function ResponseFailure($status, $failureMessage, $failureResult=[])
    {
        return response()->json([
            "status"          => $status,
            "successResult"   => [],
            "failureMessage"  => $failureMessage,
            "failureResult"   => $failureResult
        ],$status);
    }

    public function ResponseSuccess($status, $result)
    {
        return response()->json([
            "status"          => $status,
            "successResult"   => $result,
            "failureMessage"  => "",
            "failureResult"   => []
        ],$status);
    }

    
}
