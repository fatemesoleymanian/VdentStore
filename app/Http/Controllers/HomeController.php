<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = DB::table('product')->get()->all();

//        foreach ($users as $user) {
//            echo $user->name;}
        return view('home', compact('users') );
    }

    public function start()
    {
        return view('start');

    }
    public function getfromApi()
    {
            $items =Http::get('https://reqres.in/api/users?page=1 ');
            return view('home' ,['collection'=>$items['data']]);
    }
}
