<!-- Sidebar -->
<div class="sidebar" id="sidebar" style="width: 250px; ">
    <div class="sidebar-inner slimscroll" style="margin-top:22px;">
        <div id="sidebar-menu" class="sidebar-menu" >
            <ul>
                <li><a href="dashboard" class="nav-link" ><i class="fa fa-paw" ></i><span>Dashboard</span></a></li>
                <li><a class="nav-link" href="{{ route('user.index') }}" ><i class="fe fe-users" ></i> <span>Users</span></a></li>
                <li><a class="nav-link" href="{{ route('category.index') }}" ><i class="fa fa-medkit" ></i> <span> Services</span></a></li>
                <li><a class="nav-link" href="{{ route('clinic.index') }}" ><i class="fa fa-hospital-o" ></i> <span>Clinics</span></a></li>
                <li><a class="nav-link" href="{{ route('clinicService.index') }}"><i class="fa fa-briefcase" ></i> <span> Clinics Services</span></a></li>
                <li><a class="nav-link" href="{{ route('workHours.index') }}"><i class="fa fa-clock-o" ></i> <span> Clinics Working Hours</span></a></li> 
                <li><a class="nav-link" href="{{ route('clinicVet.index') }}"><i class="fa fa-stethoscope" ></i> <span> Clinics Vets</span></a></li> 
                <li><a class="nav-link" href="{{ route('book.index') }}"><i class="fa fa-calendar-plus-o" ></i> <span> Bookings</span></a></li> 
                <li><a class="nav-link" href="{{ route('schedule.index') }}"><i class="fa fa-clock-o" ></i> <span> Schedules</span></a></li> 
                <li><a class="nav-link" href="{{ route('review.index') }}"><i class="fa fa-comment" ></i> <span> Reviews</span></a></li> 
                <li><a class="nav-link" href="{{ route('blog.index') }}"><i class="fa fa-newspaper-o" ></i> <span> Blogs</span></a></li> 
                
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li>
                    <a href="profile.html"><i class="fe fe-user-plus" ></i> <span>Profile</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
