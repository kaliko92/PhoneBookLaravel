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
        // return response()->json($person, 200);
    }

    public function show($id)
    {
        $person = Person::find($id);
        if(is_null($person)){
            return $this->ResponseFailure(404, "Record not found!");
            // return response()->json(['message'=>'Record not found!'], 404);
        }
        return $this->ResponseSuccess(200, $person);
        // return response()->json($person, 200) ;
    }

    public function store(PersonRequest $request)
    {     
        $newPerson = Person::create([
            'name' => $request->get('name')        
        ]);

        return $this->ResponseSuccess(201, $newPerson);
        // return response()->json($newPerson, 201);       
    }

    public function update(PersonRequest $request, $id)
    {        
        $person= Person::find($id);

        if(is_null($person)){
            return $this->ResponseFailure(404, "Record not found!");
            // return response()->json(['message'=>'Record not found!'], 404);
        }

        $person->update([            
            'name' => $request->name    
        ]);

        $person->save();

        return $this->ResponseSuccess(200, $person);
        // return response()->json($person, 200);        
    }  


    // used in bill1, day, entry
    public function destroy($id)
    {     

        $contacts = Contact::where('personId', $id)->get();
        foreach ($contacts as $conn) {
            $conn->delete();
        }

        $person = Person::find($id);
        // $existBill = Bill1::where('customerId', $id)->get();
        // if (count($existBill) != 0) {
        //     return response()->json(["message"=> "This record is used!"], 404);
        // }
        // if (is_null($person)) {
        //     return response()->json(["message"=> "record not found!"], 404);
        // }
        $person->delete();
    
        return $this->ResponseSuccess(204, $person::all());
        // return response()->json($person::all(),204);
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
