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
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
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
                                    <td>UID</td>
                                    <td>{{ $uid }}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>User ID</td>
                                    <td>{{ $userid }}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Name</td>
                                    <td>{{ $name }}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">4</th>
                                    <td>Role</td>
                                    <td>{{ $role }}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">5</th>
                                    <td>Password</td>
                                    <td>{{ $password }}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">6</th>
                                    <td>Card No</td>
                                    <td>{{ $cardno }}</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->


    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Recent</h6>
                <a href="">Show All</a>
            </div>
            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <table class="table table-bordered table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Fingerprint</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                            $sl=1;
                            @endphp

                          @foreach($userfingerprints as $userfingerprint)
                          <tr>
                            <th scope="row">{{ $sl++ }}</th>
                            <td>{!! $userfingerprint !!}</td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->





    <!-- Footer Start -->
        @include('partials._footer')
    <!-- Footer End -->
</div>
@endsection
