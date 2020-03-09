<!--Nilam Rana-->
<!--CS 491-->



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SaveUser;

class WelcomeController extends Controller
{
    //
    public function signup(Request $request)
    {
    	$user = new SaveUser();
    	$ok = $user->save($request->fname,$request->lname,$request->password,$request->email,$request->phone);
    	return response()->json($ok);
    }

        public function login(Request $request)
    {
    	$user = new SaveUser();
    	$ok = $user->login($request->email,$request->password);
    	return response()->json($ok);
    }
}
