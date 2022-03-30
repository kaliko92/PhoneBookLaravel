<?php

namespace App\Http\Requests;

use App\Http\Requests\API\FormRequest;
use Illuminate\Validation\Validator;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {return [];}
            case 'POST': {
                return [
                    'type'=> 'required|max:255',
                    'value'=> 'required|max:255',
                    'personId'=> 'required',
                ];
            }
            case 'PUT':{                
                return [
                    'type'=> 'required|max:255',
                    'value'=> 'required|max:255',
                    'personId'=> 'required',
                ];
            }        
            default:
                break;
        }
        
    }

    public function messages()
    {
        return [
            'type.required'=> 'The type is required',
            'value.required'=> 'The value is required',
            'personId.required'=> 'The person is required',
            // 'name.unique'=> 'The name is repeated',
        ];
    }

    private function getSegmentFromEnd($position_from_end = 1) {
        $segments =$this->segments();
        return $segments[sizeof($segments) - $position_from_end];
    }

 

}
