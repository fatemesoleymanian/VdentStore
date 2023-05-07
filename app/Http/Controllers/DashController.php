<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function dash(){
        $ids = ['id','honey','3 score'];
        return view('dashboard' , compact('ids'));
    }
    public function home(){
        return view('home');
    }
    public function validation(Request $req)
    {
        $req->validate([
            'UserName'=>'required',
            'Password'=>'required | min:6 | max:16'
        ]);
        return $req->input();
    }
}
