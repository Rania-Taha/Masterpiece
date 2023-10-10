@extends('admin.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">Reviews</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Reviews</li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col">


                        <a href="{{ url('review/create') }}" class="btn btn-success float-right  btn-sm"
                            title="Add New Service">
                            Add New Reviews
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
                                            <th>User id</th>
                                            <th>Review</th>
                                            <th>Rating</th>
                                            <th>Clinic id</th>
                                            <th class="text-right">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($review as $item)
                                            <tr>
                                                <td>{{ $item->user_id }}</td>
                                                <td>{{ $item->review_text }}</td>
                                                <td>{{ $item->rating }}</td>
                                                <td>{{ $item->clinic_id }}</td>
                                                </td>

                                                <td class="text-right">
                                                    <div class="actions">

                                                        <a class="btn btn-primary"
                                                            href="{{ route('review.edit', ['review' => $item->id]) }}">update</a>

                                                            <form method="POST"
                                                            action="{{ url('/review' . '/' . $item->id) }}"
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
