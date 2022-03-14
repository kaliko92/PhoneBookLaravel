<?php

namespace App\Http\Requests;

use App\Http\Requests\API\FormRequest;
use Illuminate\Validation\Validator;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonRequest extends FormRequest
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
                    'name'=> 'required|unique:person|max:255',
                ];
            }
            case 'PUT':{                
                return [
                    'name'=> 'required|unique:person,name,'.$this->getSegmentFromEnd().',id'.'|max:255',
                ];
            }        
            default:
                break;
        }
        
    }

    public function messages()
    {
        return [
            'name.required'=> 'The name is required',
            'name.unique'=> 'The name is repeated',
        ];
    }

    private function getSegmentFromEnd($position_from_end = 1) {
        $segments =$this->segments();
        return $segments[sizeof($segments) - $position_from_end];
    }

 

}
