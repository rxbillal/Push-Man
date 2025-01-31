<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ route('dashboard') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>PUSHMAN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Admin</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Devices</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ url('/devices') }}" class="dropdown-item">Device</a>
                    <a href="{{ url('/integration-add') }}" class="dropdown-item">Intregation</a>
                    <a href="{{ url('/device-information') }}" class="dropdown-item">Information</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Users</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ url('/device-data') }}" class="dropdown-item">All User</a>
                    <a href="{{ url('/device-adduser') }}" class="dropdown-item">Add</a>
                    {{-- <a href="{{ url('/device-attendance') }}" class="dropdown-item">Other Elements</a> --}}
                </div>
            </div>
            <a href="{{ url('/device-attendance') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Attendance</a>
        </div>
    </nav>
</div>
