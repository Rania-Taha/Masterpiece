@extends('admin.layouts.master')

@section('content')


<!-- Page Wrapper -->
<div class="page-wrapper">
			
    <div class="content container-fluid ">
        
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome Rania Taha!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon text-primary border-primary">
                                <i class="fe fe-users"></i>
                            </span>
                            <div class="dash-count">
                                <h3>60</h3>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            <h6 class="text-muted">Veterinarians</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon text-danger border-danger">
                                <i class="fe fe-money"></i>
                            </span>
                            <div class="dash-count">
                                <h3>35</h3>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            
                            <h6 class="text-muted">Clinics</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon text-success">
                                <i class="fe fe-credit-card"></i>
                            </span>
                            <div class="dash-count">
                                <h3>487</h3>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            
                            <h6 class="text-muted">Users</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon text-danger border-danger">
                                <i class="fe fe-money"></i>
                            </span>
                            <div class="dash-count">
                                <h3>210</h3>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            
                            <h6 class="text-muted">Appointment</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon text-warning border-warning">
                                <i class="fe fe-folder"></i>
                            </span>
                            <div class="dash-count">
                                <h3>6200JD</h3>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            
                            <h6 class="text-muted">Revenue</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-warning w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
            
                <!-- Sales Chart -->
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Revenue</h4>
                    </div>
                    <div class="card-body">
                        <div id="morrisArea"></div>
                    </div>
                </div>
                <!-- /Sales Chart -->
                
            </div>
            <div class="col-md-12 col-lg-6">
            
                <!-- Invoice Chart -->
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Status</h4>
                    </div>
                    <div class="card-body">
                        <div id="morrisLine"></div>
                    </div>
                </div>
                <!-- /Invoice Chart -->
                
            </div>	
        </div>
        <div class="row">
            <div class="col-md-6 d-flex">
            
                <!-- Recent Orders -->
                {{-- <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title">Veterinarians List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Veterinarian Name</th>
                                        <th>Speciality</th>
                                        <th>Earned</th>
                                        <th>Reviews</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/dr raghad.jpg" alt="User Image"></a>
                                                <a href="profile.html">Raghad Al-Omari</a>
                                            </h2>
                                        </td>
                                        <td>Veterinarian</td>
                                        <td>230JD</td>
                                        <td>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star-o text-secondary"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/dr.saba.jpg" alt="User Image"></a>
                                                <a href="profile.html">Dr. Saba Rihani</a>
                                            </h2>
                                        </td>
                                        <td>Veterinarian</td>
                                        <td>120JD</td>
                                        <td>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star-o text-secondary"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/dr moh.jpg" alt="User Image"></a>
                                                <a href="profile.html">Dr. Abdallah Salah</a>
                                            </h2>
                                        </td>
                                        <td>Veterinarian</td>
                                        <td>320JD</td>
                                        <td>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star-o text-secondary"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/mohammad.jpg" alt="User Image"></a>
                                                <a href="profile.html">Dr. Mohammad Z. Okour</a>
                                            </h2>
                                        </td>
                                        <td>Veterinarian</td>
                                        <td>340JD</td>
                                        <td>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star text-warning"></i>
                                            <i class="fe fe-star-o text-secondary"></i>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
                <!-- /Recent Orders -->
                
            {{-- </div>
            <div class="col-md-6 d-flex"> --}}
            
                <!-- Feed Activity -->
                {{-- <div class="card  card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title">Users List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>													
                                        <th>Pet Owner</th>
                                        <th>Phone</th>
                                        <th>Last Visit</th>
                                        <th>Paid</th>													
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/rama.jpg" alt="User Image"></a>
                                                <a href="profile.html">Rama Ababneh </a>
                                            </h2>
                                        </td>
                                        <td>0798652145</td>
                                        <td>20 Oct 2023</td>
                                        <td class="text-right">21JD</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/maison.jpg" alt="User Image"></a>
                                                <a href="profile.html">Maison Haddad </a>
                                            </h2>
                                        </td>
                                        <td>0798652166</td>
                                        <td>20 Jul 2023</td>
                                        <td class="text-right">42JD</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/ayataha.jpg" alt="User Image"></a>
                                                <a href="profile.html">Aya Taha</a>
                                            </h2>
                                        </td>
                                        <td>0777652166</td>
                                        <td>21 Oct 2022</td>
                                        <td class="text-right">26JD</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/razan.jpg" alt="User Image"></a>
                                                <a href="profile.html">Razan Al-Rjoub</a>
                                            </h2>
                                        </td>
                                        <td>0777652166</td>
                                        <td>18 Sep 2023</td>
                                        <td class="text-right">16JD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
                <!-- /Feed Activity -->
                
            {{-- </div>
        </div>
        <div class="row">
            <div class="col-md-12"> --}}
            
                <!-- Recent Orders -->
                {{-- <div class="card card-table">
                    <div class="card-header">
                        <h4 class="card-title">Appointment List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Veterinarian Name</th>
                                        <th>Speciality</th>
                                        <th>Pet Owner</th>
                                        <th>Apointment Time</th>
                                        <th>Status</th>
                                        <th class="text-right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/dr raghad.jpg" alt="User Image"></a>
                                                <a href="profile.html">Dr. Raghad Al-Omari</a>
                                            </h2>
                                        </td>
                                        <td>Veterinarian</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/rama.jpg" alt="User Image"></a>
                                                <a href="profile.html">Rama Ababneh </a>
                                            </h2>
                                        </td>
                                        <td>9 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.15 AM</span></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="status_1" class="check" checked>
                                                <label for="status_1" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            7JD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/dr.saba.jpg" alt="User Image"></a>
                                                <a href="profile.html">Dr. Saba Rihani</a>
                                            </h2>
                                        </td>
                                        <td>Veterinarian</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/maison.jpg" alt="User Image"></a>
                                                <a href="profile.html">Maison Haddad </a>
                                            </h2>
                                        </td>
                                        <td>9 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.15 AM</span></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="status_1" class="check" checked>
                                                <label for="status_1" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            7JD
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/dr.saba.jpg" alt="User Image"></a>
                                                <a href="profile.html">Dr. Saba Rihani</a>
                                            </h2>
                                        </td>
                                        <td></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
                                                <a href="profile.html">Maison Haddad </a>
                                            </h2>
                                        </td>
                                        
                                        <td>5 Nov 2023 <span class="text-primary d-block">11.00 AM - 11.35 AM</span></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="status_2" class="check" checked>
                                                <label for="status_2" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            5JD
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/dr moh.jpg" alt="User Image"></a>
                                                <a href="profile.html">Dr. Abdallah Salah</a>
                                            </h2>
                                        </td>
                                        <td>Veterinarian</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/ayataha.jpg" alt="User Image"></a>
                                                <a href="profile.html">Aya Taha</a>
                                            </h2>
                                        </td>
                                        <td>11 Nov 2019 <span class="text-primary d-block">12.00 PM - 12.15 PM</span></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="status_3" class="check" checked>
                                                <label for="status_3" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            7JD
                                        </td>
                                    </tr>
                                
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
                <!-- /Recent Orders -->
                
            </div>
        </div>
        
    </div>			
</div>
<!-- /Page Wrapper -->

@endsection