<?php

namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function getSignup()
	{
		return view('auth.signup');
	}

	public function postSignup(Request $request)
	{
		$this->validate($request, [
			'username' => 'required|unique:users|email|max:255',
			'email' => 'required|unique:users|alpha_dash|max:20',
			'password' => 'required|min:6',
		]);

		

	}
}