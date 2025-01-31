@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('partials._navbar')
    <!-- Navbar End -->

    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Device Information</h6>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Information</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Device IP</td>
                            <td>{{ $deviceip }}</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Device Name</td>
                            <td>{{ $devicedeviceName }}</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Device Version</td>
                            <td>{{ $deviceVersion }}</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Device OS Version</td>
                            <td>{{ $deviceOSVersion }}</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Device Platform</td>
                            <td>{{ $devicePlatform }}</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Device Fm Version</td>
                            <td>{{ $devicefmVersion }}</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Device Work Code</td>
                            <td>{{ $deviceworkCode }}</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Device SSR</td>
                            <td>{{ $devicessr }}</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Device Epin Width</td>
                            <td>{{ $devicepinWidth }}</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Device Serial Number</td>
                            <td>{{ $deviceserialNumber }}</td>
                          </tr>
                          <tr>
                            <th scope="row">11</th>
                            <td>Device Time</td>
                            <td>{{ $devicegetTime }}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->


    <!-- Recent Sales Start -->
    {{-- <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Date</th>
                            <th scope="col">Invoice</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
    <!-- Recent Sales End -->





    <!-- Footer Start -->
        @include('partials._footer')
    <!-- Footer End -->
</div>
@endsection
