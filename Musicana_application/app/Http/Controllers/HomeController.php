<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect("admin/admindashboard");

      
    //    dd($user->role_id);
    }
    public function home()
    {
        return view("home");

      
    //    dd($user->role_id);
    }
    // public function index()
    // {
    //    $user = Auth::user();
    // //    dd($user);
    //    if($user['role_id'] == 1){
    //     return redirect("admin/admindashboard");
    //    } 
    //     return view('home');
      
    // //    dd($user->role_id);
    // }
}
