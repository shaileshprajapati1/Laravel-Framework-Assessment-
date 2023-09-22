@extends('layouts.customeapp')

@section('main')
    <div class="container">
        
        @foreach ($allmusics as $music)
            <div class="row mb-2">
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body">

                            <img src="{{ '/uploads/' . $music['music_pic'] }}" width="100px" height="100px" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $music['music_name']." ===>>> " .$music['artist_name'] }} </h5>
                            <audio controls>
                                {{-- <source src="{{ '/music/' . $music['music'] }}" type="audio/ogg"> --}}
                                <source src="{{ '/music/' . $music['music'] }}" type="audio/mpeg">
                                
                              </audio>
                            {{-- <a class="btn btn-success" href="{{ '/music/' . $music['music'] }}" download>Download</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mb-5">

    </div>
@endsection
