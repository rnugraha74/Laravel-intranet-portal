<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    //
    public function profile() {
    	return view('dashboard-profile', array('user' => Auth::user()) );
    }
}
