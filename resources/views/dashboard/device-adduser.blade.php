@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Navbar Start -->
    @include('partials._navbar')
    <!-- Navbar End -->

    <!-- Sale & Revenue Start -->
    {{-- <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Add User</h6>
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                          <form action="{{ route('machine.devicesetuser') }}" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-3">
                                UID :
                            </div>
                            <div class="col-9">
                                <input type="text" name="uid" class="form-control" required/>
                            </div>
                            <br/><br/>
                            <div class="col-3">
                                User ID :
                            </div>
                            <div class="col-9">
                                <input type="text" name="userid" class="form-control" required/>
                            </div>
                            <br/><br/>
                            <div class="col-3">
                                Name :
                            </div>
                            <div class="col-9">
                                <input type="text" name="name" class="form-control" required/>
                            </div>
                            <br/><br/>
                            <div class="col-3">
                                Role :
                            </div>
                            <div class="col-9">
                                <input type="text" name="role" class="form-control" required/>
                            </div>
                            <br/><br/>
                            <div class="col-3">
                                Password :
                            </div>
                            <div class="col-9">
                                <input type="text" name="password" class="form-control" />
                            </div>
                            <br/><br/>
                            <div class="col-3">
                                Card No :
                            </div>
                            <div class="col-9">
                                <input type="text" name="cardno" class="form-control" required/>
                            </div>
                            <br/><br/><br/>
                            <div class="col-3"></div>
                            <div class="col-9">
                                <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
                            </div>
                          </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Sale & Revenue End -->


    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                  <form action="{{ route('machine.devicesetuser') }}" method="post">
                    @csrf
                  <div class="row">
                    <div class="col-3">
                        UID :
                    </div>
                    <div class="col-9">
                        <input type="text" name="uid" class="form-control" required/>
                    </div>
                    <br/><br/>
                    <div class="col-3">
                        User ID :
                    </div>
                    <div class="col-9">
                        <input type="text" name="userid" class="form-control" required/>
                    </div>
                    <br/><br/>
                    <div class="col-3">
                        Name :
                    </div>
                    <div class="col-9">
                        <input type="text" name="name" class="form-control" required/>
                    </div>
                    <br/><br/>
                    <div class="col-3">
                        Role :
                    </div>
                    <div class="col-9">
                        <input type="text" name="role" class="form-control" required/>
                    </div>
                    <br/><br/>
                    <div class="col-3">
                        Password :
                    </div>
                    <div class="col-9">
                        <input type="text" name="password" class="form-control" />
                    </div>
                    <br/><br/>
                    <div class="col-3">
                        Card No :
                    </div>
                    <div class="col-9">
                        <input type="text" name="cardno" class="form-control" required/>
                    </div>
                    <br/><br/><br/>
                    <div class="col-3"></div>
                    <div class="col-9">
                        <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
                    </div>
                  </div>
                  </form>
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
