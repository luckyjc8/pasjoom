<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserEmail;

class UserEmailController extends Controller
{
    public function subscribe(Request $request){
    	$ue = new UserEmail;
    	$ue->email = $request->email;
    	$ue->save();
    	return redirect('/?submitted=yes');
    }
}
