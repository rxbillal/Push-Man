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
                    <h6 class="mb-4">Add Api Config</h6>
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                          <form action="{{ route('SettingConfig') }}" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-2">
                                Name :
                            </div>
                            <div class="col-10">
                                <input type="text" name="name" class="form-control" required/>
                            </div>
                            <br/><br/>
                            <div class="col-2">
                                Device ID :
                            </div>
                            <div class="col-10">
                                <input type="text" name="device_id" class="form-control" required/>
                            </div>
                            <br/><br/>
                            <div class="col-2">
                                Base Url :
                            </div>
                            <div class="col-10">
                                <input type="text" name="base_url" class="form-control" required/>
                            </div>
                            <br/><br/>
                            <div class="col-2">
                                Api Url :
                            </div>
                            <div class="col-10">
                                <input type="text" name="api_url" class="form-control" required/>
                            </div>
                            <br/><br/>
                            <div class="col-2">
                                Api Key :
                            </div>
                            <div class="col-10">
                                <input type="text" name="api_key" class="form-control" />
                            </div>
                            <br/><br/>
                            <div class="col-2">
                                Push Key :
                            </div>
                            <div class="col-10">
                                <input type="text" name="push_key" class="form-control" required/>
                            </div>
                            <br/><br/><br/>
                            <div class="col-2"></div>
                            <div class="col-10">
                                <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
                            </div>
                          </div>
                          </form>
                        </div>
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
