@extends('admin.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                        <h3 class="page-title">Users</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users</li>
                           
                        </ul>
                    </div>
                    
                    <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; " >


                        <a href="{{ url('user/create') }}" class="btn btn-success  btn-md"
                            title="Add New Service">
                            + Add New user
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead style="text-align: center; vertical-align: middle;">

                                        <tr style="text-align: center; vertical-align: middle;" >
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Image</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>phone</th>
                                            <th>address</th>
                                            <th>role</th>
                                            <th>clinic_id</th>
                                            <th >Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle;">
                                        @foreach ($user as $item)
                                            <tr style="text-align: center; vertical-align: middle;">
                                                <td>{{ $item->first_name }}</td>
                                                <td>{{ $item->last_name }}</td>
                                                <td><img src="{{ asset($item->image) }}"
                                                        style="height: 100px; width: 100px;">
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->password }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>{{ $item->role }}</td>
                                                <td>{{ $item->clinic_id }}</td>
                                                </td>

                                                <td style="text-align: center; vertical-align: middle;">
                                                    <div class="actions">

                                                        <a class="btn btn-primary"
                                                            href="{{ route('user.edit', ['user' => $item->id]) }}">update</a>

                                                            <form method="POST"
                                                            action="{{ url('/user' . '/' . $item->id) }}"
                                                            accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger "
                                                                title="Delete Working Hours"
                                                                onclick="return confirm('Confirm delete?')"> Delete</button>
                                                        </form>


                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
