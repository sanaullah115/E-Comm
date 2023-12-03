<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\usermodel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        

        $user = usermodel::where(['Email' => $request->email])->first();

        if ($user && Hash::check($request->password, $user->Password)) {
            return redirect('/');
        } else {
            return 'User email and password do not match';
        }
    }
}
