<?php

namespace App\Http\Controllers;

use App\Models\musics;
use Illuminate\Http\Request;
use Validator;

class MusicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addmusic');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, musics $musics)
    {
        // dd($request->all());
        // dd($request['music_pic']);
        $rules = array(
            'music_name' => 'required',
            'artist_name' => 'required',
            'music_pic' => 'required|mimes:png,jpg,jpeg|max:2048',
            'music' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',

        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // echo "inside if";
            // dd($validator);
            return \Redirect::to('admin/addmusic')->withErrors($validator)->withInput();
        } else {

            $img = $request['music_pic'];
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('/uploads'), $imageName);


            $song = $request['music'];
            $music = time() . '.' . $song->getClientOriginalExtension();
            $song->move(public_path('/music'), $music);

            $musics->music_name = $request->music_name;
            $musics->artist_name = $request->artist_name;
            $musics->music_pic = $imageName;
            $musics->music = $music;
            $musics->save();

            return redirect("admin/viewmusics");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(musics $musics)
    {

        $allmusics = $musics->all();
        //  dd($allmusics);
        return view("admin/viewallmusic", compact('allmusics'));
    }
    public function playmusic(musics $musics)
    {

        $allmusics = $musics->all();
        //  dd($allmusics);
        return view("allmusic", compact('allmusics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(musics $musics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, musics $musics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($mid,musics $musics)
    {
        $allmusic = $musics::find($mid);
        // dd($allmusic);
        $allmusic->delete();
        return redirect("admin/viewmusics");

    }
}
