@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('partials._navbar')
    <!-- Navbar End -->


    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                {{-- <h6 class="mb-0">All Users</h6> --}}
                <button type="button" class="mb-0 btn btn-primary rounded-pill m-2 position-relative">
                    <a href="#" style="color: white; text-decoration: none;">Auto Setup</a>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                        On
                    </span>
                </button>



                <button type="button" class="mb-0 btn btn-primary rounded-pill m-2 position-relative">
                    <a href="#" style="color: white; text-decoration: none;">Manual Setup</a>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                        Off
                    </span>
                </button>



            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Device ID</th>
                        <th scope="col">BaseUrl</th>
                        <th scope="col">ApiUrl</th>
                        <th scope="col">ApiKey</th>
                        <th scope="col">PushKey</th>
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $sl=1;
                        @endphp

                    @foreach($devices as $device)
                    <tr>
                        <th scope="row">{{ $sl++ }}</th>
                        <td>{{ $device['name'] }}</td>
                        <td>{{ $device['device_id'] }}</td>
                        <td>{{ $device['base_url'] }}</td>
                        <td>{{ $device['api_url'] }}</td>
                        <td>{{ $device['api_key'] }}</td>
                        <td>{{ $device['push_key'] }}</td>
                        {{-- <td>
                            <a class="btn btn-success btn-sm" href="{{ route('machine.deviceviewusersingle',$user) }}">
                                View</a>
                            <a class="btn btn-success btn-sm" href="{{ route('machine.deviceremoveusersingle',$user['uid']) }}">
                            Delete</a>
                        </td> --}}
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <table class="table table-bordered table-responsive">
                <h3>Attendance Log</h3>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">UID</th>
                    <th scope="col">ID</th>
                    <th scope="col">State</th>
                    <th scope="col">Timestamp</th>
                    <th scope="col">Type
                        <br>
                        0=checkin
                        <br>
                        1=checkout
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @php
                    $sl=1;
                    @endphp

                  @foreach($attendaces as $attendace)
                  <tr>
                    <th scope="row">{{ $sl++ }}</th>
                    <td>{{ $attendace['uid'] }}</td>
                    <td>{{ $attendace['id'] }}</td>
                    <td>{{ $attendace['state'] }}</td>
                    <td>{{ $attendace['timestamp'] }}</td>
                    <td>{{ $attendace['type'] }}</td>
                  </tr>
                  @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- Recent Sales End -->





    <!-- Footer Start -->
        @include('partials._footer')
    <!-- Footer End -->
</div>
@endsection
