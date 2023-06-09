<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function session_chk($request, $page){
        $value = $request->session()->pull('key');
        if($value){
            return view($page);
        }else{
            return view('auth.login');
        }
    }

    public function session_set(){
        Session::put('key', 'value');
        // $usr = Auth::user(); 
        // $usrnm = $usr->username;
        // Session::put('username', );
        
    }

    public function session_kill(){
        // Auth::logout();
        Session::flush();
        return view('auth.login');
        // $usr = Auth::user(); 
        // $usrnm = $usr->username;
        // Session::put('username', );
        
    }
}
