<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(){

		return view ('login');

	}

	public function LoginProses(){
		if (auth()->guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('admin')->with('success', 'Login Berhasil');
        }

		if (auth()->guard('opd')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('opd')->with('success', 'Login Berhasil');
        }

		if (auth()->guard('staff')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('staff-administrasi')->with('success', 'Login Berhasil');
        }

		return redirect('login');
	}

	public function logout(Request $request){
		
		auth()->guard('admin')->logout();
		auth()->guard('opd')->logout();
		auth()->guard('staff')->logout();
		return redirect('login');
	}

}
