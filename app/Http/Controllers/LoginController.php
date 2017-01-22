<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
	{
		session_start();
		$email     = $_POST['email'];
		$password = $_POST['password'];

				$mail = \App\ms_user::where('email', $email)->count();
				
				if (!empty($mail)) {

					$pass = \App\ms_user::where('password', $password)->count();

					if (!empty($pass)) {

						$getidtype = \App\ms_user::where('email', $email)->first();
						$idtype = $getidtype->user_type_id;
        				$gettype = \App\user_type::where('id', $idtype)->first();

						$name = $getidtype->name;
						$iduser = $getidtype->id;
						$type = $gettype->name;
						$idtype = $getidtype->user_type_id;
						
						$request->session()->put('email', '$email');
						$request->session()->put('password', '$password');
						$request->session()->put('idtype', $idtype);
						$request->session()->put('type', $type);
						$request->session()->put('name', $name);
						$request->session()->put('iduser', $iduser);
						$_SESSION['logged_in'] = 1;
						return redirect('admin');

					} else {
						return redirect('login')->with('status', 'Wrong Password !');
				}

				} else {
					return redirect('login')->with('status', 'Wrong Email !');
			}
	}

	public function logout()
	{
		session_start();
		session_destroy();
		return redirect('login');
		exit;
	}

}
