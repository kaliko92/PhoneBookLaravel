<?php

namespace App\Http\Controllers\API;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Response;

class ContactController extends Controller
{

    public function index()
    {
        $contact = Contact::all();
        return $this->ResponseSuccess(200, $contact);
        // return response()->json($contact, 200);
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        if(is_null($contact)){
            return $this->ResponseFailure(404, "Record not found!");
            // return response()->json(['message'=>'Record not found!'], 404);
        }
        return $this->ResponseSuccess(200, $contact);
        // return response()->json($contact, 200) ;
    }

    public function store(ContactRequest $request)
    {     
        $newContact = Contact::create([
            'type' => $request->get('type'),
            'value' => $request->get('value'),
            'personId' => $request->get('personId'),
        ]);

        return $this->ResponseSuccess(201, $newContact);
        // return response()->json($newContact, 201);       
    }

    public function update(ContactRequest $request, $id)
    {        
        $contact= Contact::find($id);

        if(is_null($contact)){
            return $this->ResponseFailure(404, "Record not found!");
            // return response()->json(['message'=>'Record not found!'], 404);
        }

        $contact->update([            
            'type' => $request->get('type'),
            'value' => $request->get('value'),
            'personId' => $request->get('personId'),        ]);

        $contact->save();

        return $this->ResponseSuccess(200, $contact);
        // return response()->json($contact, 200);        
    }  


    // used in bill1, day, entry
    public function destroy($id)
    {     
        $contact = Contact::find($id);
        // $existBill = Bill1::where('customerId', $id)->get();
        // if (count($existBill) != 0) {
        //     return response()->json(["message"=> "This record is used!"], 404);
        // }
        // if (is_null($contact)) {
        //     return response()->json(["message"=> "record not found!"], 404);
        // }
        $contact->delete();
    
        return $this->ResponseSuccess(204, $contact::all());
        // return response()->json($contact::all(),204);
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
