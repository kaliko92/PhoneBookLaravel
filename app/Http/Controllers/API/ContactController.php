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
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        if(is_null($contact)){
            return $this->ResponseFailure(404, "Record not found!");
        }
        return $this->ResponseSuccess(200, $contact);
    }

    public function store(ContactRequest $request)
    {     
        $newContact = Contact::create([
            'type' => $request->get('type'),
            'value' => $request->get('value'),
            'personId' => $request->get('personId'),
        ]);

        return $this->ResponseSuccess(201, $newContact);
    }

    public function update(ContactRequest $request, $id)
    {        
        $contact= Contact::find($id);

        if(is_null($contact)){
            return $this->ResponseFailure(404, "Record not found!");
        }

        $contact->update([            
            'type' => $request->get('type'),
            'value' => $request->get('value'),
            'personId' => $request->get('personId'),        ]);

        $contact->save();

        return $this->ResponseSuccess(200, $contact);
    }  


    public function destroy($id)
    {     
        $contact = Contact::find($id);
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
