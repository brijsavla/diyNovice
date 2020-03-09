<!--Nilam Rana-->
<!--CS 491-->



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveUser extends Controller
{
    //
    public function save($fname,$lname,$password,$email,$phone)
    {
    	return true;
    }

    public function login($password,$email)
    {
    	return true;
    }
}
