@extends('layouts.adminapp')

@section('admin')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
           
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Music Name</th>
                        <th scope="col">Artist Name</th>
                        <th scope="col">Music_Pic</th>
                        <th scope="col">Music</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allmusics as $music)
                        <tr>
                            <td> {{ $music['music_name'] }}</td>
                            <td> {{ $music['artist_name'] }}</td>
                            <td> {{ $music['music_pic'] }}</td>
                            <td> {{ $music['music'] }}</td>
                            <td>
                                <a href="deletemusic/{{ $music['id'] }}"><i class="fa fa-trash" aria-hidden="true"></i></a>

                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            @push('name')
                {{-- <script>
                    function myFunction() {
                        if (!confirm("Are You Sure to delete this"))
                            event.preventDefault();
                    }
                </script> --}}
            @endpush
        </section>
    </section>
@endsection
