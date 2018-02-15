<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function store(Request $request)
	{
		if(! auth()->attempt(request(['email', 'password'])) ){
			return back();
		}
		return redirect()->home();
	}

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
