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
                <button type="button" class="mb-0 btn btn-primary rounded-pill m-2">
                    <a href="{{ url('addSetting') }}" style="color: white; text-decoration: none;">Auto Setup</a>
                </button>

                <button type="button" class="btn btn-primary rounded-pill m-2">
                    <a href="{{ url('addSetting') }}" style="color: white; text-decoration: none;">Manual Setup</a>
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
        </div>
    </div>
    <!-- Recent Sales End -->





    <!-- Footer Start -->
        @include('partials._footer')
    <!-- Footer End -->
</div>
@endsection
