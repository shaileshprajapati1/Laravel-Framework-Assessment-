@extends('layouts.adminapp')
@section('admin')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3 class="text-center">Add Music</h3>

            <form action="/admin/savemusic" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="music_name">Music Name</label>
                    <input type="text" name="music_name" class="form-control" id="music_name">
                </div>
                <div class="form-group">
                    <label for="artist_name">Artist Name</label>
                    <input type="text" name="artist_name" class="form-control" id="artist_name">
                </div>
                <div class="form-group">
                    <label for="music_pic">Music_Pic</label>
                    <input type="file" name="music_pic" class="form-control" id="music_pic">
                </div>
                <div class="form-group">
                    <label for="music">Music</label>
                    <input type="file" name="music" class="form-control" id="music">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Add Music" name="addmusic">
                </div>


            </form>
            @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>
    </section>
@endsection
