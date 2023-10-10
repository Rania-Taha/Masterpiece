@extends('frontend.layouts.master')
 

@section('content')

<!-- Clinics section pawt -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h1 class="text-primary"> Veterinary Clinics</h1>
        <br>
        @foreach ($category as $items)
        @if ($items->name === 'Veterinary Clinics')
            <p style="font-size: 20px; color:black">{{ $items->long_description }}</p>
        @endif
    @endforeach

    </div>
    <div class="row mt-5">
        @foreach ($all_clinics as $item)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-orange" style="width: 100%;">
                <img src="{{ asset($item->image) }}" class="card-img-top" alt="Clinic Image" >
                {{-- style="height: 90px; width: 90px;" --}}
                {{-- <img src="img/treaty.png" class="card-img-top" alt="Clinic Image" /> --}}
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <div class="rating-paws">
                        <div class="d-flex justify-content-center">
                            <p class="mr-2 text-dark">Rating:</p>
                            <p>
                                <i class="fas fa-paw text-primary"></i>
                                <i class="fas fa-paw text-primary"></i>
                                <i class="fas fa-paw text-primary"></i>
                                <i class="fas fa-paw text-primary"></i>
                                <i class="fas fa-paw text-primary"> </i>
                                25 Review
                            </p>
                        </div>
                    </div>
                    <p class="text-center">{{ $item->location }}</p>
                    <a href="{{ route('single_clinic',$item->id) }}" class="btn btn-lg btn-primary mt-3 mt-md-4 px-3">See Details</a>

                    <!-- <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-2">See Details</a> -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
<br>
<div class="col-lg-12">
<nav aria-label="Page navigation">
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo; Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">Next &raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
    </div>
</div>



<!-- Clinics section End -->
@endsection
