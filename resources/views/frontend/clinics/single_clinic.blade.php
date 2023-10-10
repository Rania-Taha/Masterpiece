@extends('frontend.layouts.master')


@section('content')
@include('sweetalert::alert')
    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="d-flex flex-column text-center mb-3 pt-5">
            <h1 class="text-primary">{{ $all_clinics->name }} </h1>
        </div>

        <!-- About Start -->
        <div class="container-fluid bg-light pt-5">
            <div class="container py-1">


                <div class="row py-5">
                    <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5 d-flex flex-column justify-content-between">
                        <div>
                            <h4 class="text-primary">About Our Clinic</h4>
                            <br>
                            <h5>{{ $all_clinics->about }}</h5>
                            <br>
                            <div class="working-hours">
                                <h5 class="mb-3 text-success">Working hours</h5>
                                <table class="table table-sm">
                                    {{-- {{ dd($work_hour) }} --}}
                                    @foreach ($work_hour as $item)
                                        <tr>
                                            <td>{{ $item->day }}</td>
                                            <td>{{ $item->start_at }}</td>
                                            <td>{{ $item->ends_at }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center">
                        <div class="row px-5">
                            <div class="col-12 p-3">
                                <img class="img-fluid w-100" src="{{ asset($all_clinics->image) }}" alt="">
                                {{-- <img src="{{ asset($item->image) }}" class="card-img-top" alt="Clinic Image" >  --}}
                                <center style="font-size: 40px; margin-top: 15px;">
                                    {{-- <a href="https://www.facebook.com/Treatypet/" class="social"><i class="bi bi-facebook fs-3"></i></a>
            <a href="#" class="social"><i class="bi bi-instagram fs-3"></i></a> --}}

                                    <a href="#book" class="btn  btn-lg btn-primary mt-3 mt-md-4 px-4 ">Book Now</a>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- About End -->

            <br>


            <div class="container py-4">
                <h2 class="text-primary text-center">Our Services</h2>
                <br>
                <br>
                <div class="row pb-3">
                    @foreach ($clinic_service as $item)
                        <div class="col-md-3 mb-5">
                            <div class="card d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100">
                                <img class="img-fluid mx-auto" src="{{ asset($item->image) }}" alt=""
                                    style="max-width: 100px;">
                                <br>
                                <h3 class="mb-3 text-success" style="font-size: 26px;">{{ $item->service_name }}</h3>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
        <!-- Services End -->

        <br><br>
        <!-- Booking Start -->
        <div class="container-fluid">
            <h2 class="text-primary text-center">Book Now</h2>
            <br>
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-5">
                        {{-- <div class="bg-primary py-5 px-4 px-sm-5">
                            <form class="py-5" method="POST" action="{{ route('bookings.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your Name" value="{{$user->first_name}}"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email" value="{{$user->email}}"
                                        required="required" />
                                </div>
                                <div class="form-group">

                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">

                                            <input type="date" id="dateInput" min="" max=""
                                                placeholder="Reservation Date"
                                                class="form-control border-0 p-4 datetimepicker-input" required>


                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">

                                        <select class="custom-select border-0 px-4" style="height: 47px;">
                                            <option selected>Select A Time</option>
                                            @foreach ($schedule as $item)
                                                @if ($item->status == 'active')
                                                    <option value="{{ $item->time }}">{{ $item->time }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        @foreach ($clinic_service as $item)
                                            <option value="{{ $item->service_name }}">{{ $item->service_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <a href="" class="btn btn-dark btn-block border-0 py-3">Book Now</a>
                                </div>
                            </form>
                        </div> --}}
                        <div class="bg-primary py-5 px-4 px-sm-5">

                            <form class="py-5" method="POST" action="{{ route('bookings.store') }}">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your Name"
                                        value="{{ $user->first_name }}" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                        value="{{ $user->email }}" required="required" />
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="date" id="dateInput" min="" max=""
                                                placeholder="Reservation Date"
                                                class="form-control border-0 p-4 datetimepicker-input" name="date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <select name="time" class="custom-select border-0 px-4" style="height: 47px;">
                                            <option selected>Select A Time</option>
                                            @foreach ($schedule as $item)
                                                @if ($item->status == 'active')
                                                    <option value="{{ $item->id }}|{{ $item->time }}">
                                                        {{ $item->time }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <select name="service" class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        @foreach ($clinic_service as $item)
                                            <option value="{{ $item->service_name }}">{{ $item->service_name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div>
                                    <button type="submit" class="btn btn-dark btn-block border-0 py-3">Book Now</button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                        <h4 class="text-secondary mb-3">Going for a vacation?</h4>
                        <h1 class="display-4 mb-4">Book For <span class="text-primary">Your Pet</span></h1>
                        <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum
                        </p>
                        <div class="row py-2">
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-house font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Boarding</h5>
                                    </div>
                                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-food font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Feeding</h5>
                                    </div>
                                    <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Grooming</h5>
                                    </div>
                                    <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1 class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Pet Tranning</h5>
                                    </div>
                                    <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking Start -->
        <br>
        <!-- Team Start -->
        <div class="container mt-5 pt-5 pb-3">
            <div class="d-flex flex-column text-center mb-5">
                <h2 class="display-4 m-2">Meet Our <span class="text-primary">Veterinarians</span></h2>
            </div>
            <div class="row pb-3" style="background:whitesmoke">
                @foreach ($clinic_vet as $item)
                    <div class="col-md-4 mb-5">
                        <div class="card d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100">
                            <img class="img-fluid mx-auto" src="{{ asset($item->image) }}" alt=""
                                style="max-width: 300px; max-height: 250px;">
                            <br>
                            <h3 class="mb-3 text-success" style="font-size: 27px;">{{ $item->name }}</h3>
                            <h5>{{ $item->position }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="container-fluid bg-light my-5 p-0 py-5">
            <div class="container p-0 py-5">
                <div class="d-flex flex-column text-center mb-5">
                    <h4 class="text-secondary mb-3">Happy Clients & Feedbacks</h4>
                    <h1 class="display-4 m-0">Our Client <span class="text-primary">Says</span></h1>
                </div>
                {{-- <div class="owl-carousel testimonial-carousel d-flex align-items-stretch">
            <div class="bg-white mx-3 p-4">
                <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                    <img class="img-fluid" src="img/rama1.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="ml-3">
                        <h5>Rama Ababneh</h5>
                    </div>
                </div>
                <p class="m-0">"The communication at this clinic is top-notch. They kept me informed every step of the way, explaining the procedures, potential risks, and expected outcomes. I appreciated their willingness to answer all my questions."</p>
            </div>
            <div class="bg-white mx-3 p-4">
                <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                    <img class="img-fluid" src="img/lama.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="ml-3">
                        <h5>Lama Nazzal</h5>
                    </div>
                </div>
                <p class="m-0">"The communication at this clinic is top-notch. They kept me informed every step of the way, explaining the procedures, potential risks, and expected outcomes. I appreciated their willingness to answer all my questions."</p>
            </div>
            <!-- Add similar card structures for other testimonials -->
            <div class="bg-white mx-3 p-4">
                <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                    <img class="img-fluid" src="img/razan.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="ml-3">
                        <h5>Razan Al-Rjoub</h5>
                    </div>
                </div>
                <p class="m-0">"The communication at this clinic is top-notch. They kept me informed every step of the way, explaining the procedures, potential risks, and expected outcomes. I appreciated their willingness to answer all my questions."</p>
            </div>
            <div class="bg-white mx-3 p-4">
                <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                    <img class="img-fluid" src="img/marah.jpeg" style="width: 80px; height: 80px;" alt="">
                    <div class="ml-3">
                        <h5>Marah Abu-Saleh</h5>
                    </div>
                </div>
                <p class="m-0">"The communication at this clinic is top-notch. They kept me informed every step of the way, explaining the procedures, potential risks, and expected outcomes. I appreciated their willingness to answer all my questions."</p>
            </div>
        </div> --}}
            </div>
        </div>


        <center>
            <h4 class="text-secondary mb-3"> Clinic Location</h4>
        </center>
        <br>
        <div class="col-12 mb-n2 p-0" style="width: 100% !important;">
            {!! $all_clinics->location_map !!}
        </div>

        <br>


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <script>
            // Get the current date
            const currentDate = new Date();

            // Calculate the date 7 days from now
            const sevenDaysFromNow = new Date(currentDate);
            sevenDaysFromNow.setDate(currentDate.getDate() + 7);

            // Format the dates as YYYY-MM-DD for the input element
            const minDate = currentDate.toISOString().split('T')[0];
            const maxDate = sevenDaysFromNow.toISOString().split('T')[0];

            // Set the min and max attributes of the input element
            const dateInput = document.getElementById("dateInput");
            dateInput.setAttribute("min", minDate);
            dateInput.setAttribute("max", maxDate);
        </script>
    @endsection
