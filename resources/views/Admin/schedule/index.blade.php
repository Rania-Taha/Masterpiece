@extends('admin.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">Schedule</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Schedule</li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col">

                        <a href="{{ url('schedule/create') }}" class="btn btn-success float-right  btn-sm"
                            title="Add New Service">
                            Add New Schedule
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
                                    <thead>

                                        <tr>
                                            <th>Clinic ID</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th class="text-right">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($schedule as $item)
                                            <tr>
                                                <td>{{ $item->clinic_id }}</td>
                                                <td>{{ $item->time }}</td>
                                                <td>{{ $item->status }}</td>
                                                

                                                <td class="text-right">
                                                    <div class="actions">

                                                        <a class="btn btn-primary "
                                                            href="{{ route('schedule.edit', ['schedule' => $item->id]) }}">Update</a>

                                                        <form method="POST"
                                                            action="{{ url('/schedule' . '/' . $item->id) }}"
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
