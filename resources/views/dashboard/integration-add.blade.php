@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('partials._navbar')
    <!-- Navbar End -->

    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Laravel Zkteco <b>( Device App )</b></h6>
                <button type="button" class="btn btn-primary rounded-pill m-2">
                    <a href="{{ url('device-adduser') }}" style="color: white; text-decoration: none;">Add User</a>
                </button>

            </div>
            <div class="table">
                {{-- <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Device ID</th>
                            <th scope="col">IP</th>
                            <th style="width: 15%" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td><a class="btn btn-sm btn-primary" href="">Action</a></td>
                        </tr>
                    </tbody>
                </table> --}}

                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            <img src="{{ asset('zkteco.jpg') }}" style="width: 100%; height:120px; border-radius: 4%;"/>
                        </div>
                        <br/>
                        <form action="{{ route('machine.devicesetip') }}" method="post">
                            @csrf
                        <div class="row">
                            <div class="col-9">
                                <input type="text" name="deviceip" class="form-control" required />
                            </div>
                            <div class="col-3">
                                <button class="btn btn-success" style="width: 100%">Set IP</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <hr/>
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('dashboard') }}" class="underline text-gray-900 dark:text-white">Test device : Testing IP({{ $deviceip ?? '' }})</a></div>
                </div>

                {{ session('dip') }}
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <a href="{{ route('machine.testsound') }}" class="btn btn-success btn-sm" style="margin: 5px">Test device sound</a>

                        <a href="{{ route('machine.deviceinformation') }}" class="btn btn-success btn-sm" style="margin: 5px">Device information</a>

                        <a href="{{ route('machine.devicedata') }}" class="btn btn-success btn-sm" style="margin: 5px">Device data</a>

                        <a href="{{ route('machine.devicedata.clear.attendance') }}" class="btn btn-success btn-sm" style="margin: 5px">Clear attendance</a>

                        <a href="{{ route('machine.devicerestart') }}" class="btn btn-success btn-sm" style="margin: 5px">Restart device</a>

                        <a href="{{ route('machine.deviceshutdown') }}" class="btn btn-success btn-sm" style="margin: 5px">Shutdown device</a>

                        <a href="{{ route('machine.deviceadduser') }}" class="btn btn-success btn-sm" style="margin: 5px">Add user to device</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->








    <!-- Footer Start -->
        @include('partials._footer')
    <!-- Footer End -->
</div>
@endsection
