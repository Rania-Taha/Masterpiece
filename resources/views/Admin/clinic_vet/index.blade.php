
@extends('admin.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">Clinic Vets</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Clinic Vets</li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col">
                     
                            <a href= "{{ url('clinicVet/create')}}" class="btn btn-success float-right  btn-sm" title="Add New Service">
                                Add New Vet
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
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>image</th>
                                            <th class="text-right">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $clinic_vet as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            
                                            <td> {{ $item->position }} </td>


                                            <td>
                                                <img src="{{ asset($item->image) }}" style="height: 100px; width: 100px;">
                                            </td>

                                            <td class="text-right">
                                                <div class="actions">
                                                    
                                                    <a class="btn btn-primary" href="{{ route('clinicVet.edit', ['clinicVet' => $item->id]) }}">update</a>
                                                    
                                                    <form method="POST" action="{{ url('/clinicVet' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
