<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use DB;

class userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(users $users)
    {
        $allusers = $users->all();
        // dd($allusers);
        return view('admin.viewallusers', compact('allusers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($cid, users $users, Request $request)
    {
        $alluser = $users::find($cid);
        return view('admin.edituser', compact('alluser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cid, string $id, Request $request)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($cid, users $users, Request $request)
    {
        $allusers = $users::find($cid);
        //    dd($allusers);
        $allusers->name = $request->name;
        $allusers->email = $request->email;
        $allusers->save();
        return redirect("admin/viewallusers");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cid, users $users)
    {
        $allusers = $users::find($cid);
        $allusers->delete();
        return redirect("admin/viewallusers");
    }
}
