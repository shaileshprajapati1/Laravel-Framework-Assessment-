@extends('layouts.adminapp')

@section('admin')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SR.NO</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 0; ?>
                    @foreach ($allusers as $data)
                        <?php $i++; ?>


                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            @if ($data->role_id == 2)
                                <td>
                                    <a href="edituser/{{ $data->id }}"><i class="fa fa-user" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                    &nbsp; &nbsp;<a href="deleteuser/{{ $data->id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    
                                
                                </td>

                        </tr>
                    @endif
                    @endforeach

                </tbody>
            </table>

        </section>
    </section>
@endsection
