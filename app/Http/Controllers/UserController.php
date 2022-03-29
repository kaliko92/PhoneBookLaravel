<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   
    public function show()
    {
        $id = Auth::user()->id;
        $data['user'] = User::find($id);
        return view('admin.user.show',$data);
    }
}
