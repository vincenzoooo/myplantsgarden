<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AccessController extends Controller
{

    public function index(Request $request): View {
        return view('login');
    }

    public function login(Request $request) {
        //FIXME Validatore
        if(Auth::attempt($request->except('_token'))) {
            return redirect('/home');
        }
        return redirect('/login');
    }

    public function logout(Request $request) {
        if(filled(Auth::user())) {
            Auth::logout();
        }
        return redirect('/login');
    }
}
