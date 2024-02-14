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
                <h6 class="mb-0">All Device</h6>
                <button type="button" class="btn btn-primary rounded-pill m-2">
                    <a href="{{ url('device-adduser') }}" style="color: white; text-decoration: none;">Add Device</a>
                </button>

            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
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
                </table>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->








    <!-- Footer Start -->
        @include('partials._footer')
    <!-- Footer End -->
</div>
@endsection
