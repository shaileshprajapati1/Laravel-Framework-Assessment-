@extends('layouts.adminapp')
@section('admin')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3 class="text-center">Update User</h3>

            <form action="/admin/updateusers/{{ $alluser['id'] }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $alluser['name'] }}" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ $alluser['email'] }}" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Update" name="update">
                </div>


            </form>
        </section>
    </section>
@endsection
