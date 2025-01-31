@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('partials._navbar')
    <!-- Navbar End -->

    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4 ">Add Device</h6>
                <form action="{{ route('machine.device_add') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="deviceInfo" class="form-label">Device Info</label>
                        <input type="text" name="identifier" class="form-control" id="deviceInfo">
                    </div>
                    <div class="mb-3">
                        <label for="deviceIP" class="form-label">Device IP</label>
                        <input type="text" name="device_ip" class="form-control" id="deviceIP">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    <!-- Footer Start -->
        @include('partials._footer')
    <!-- Footer End -->
</div>
@endsection
