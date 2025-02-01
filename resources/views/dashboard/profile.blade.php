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
                <h6 class="mb-4 ">User Information</h6>
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" value="" class="form-control" id="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Save & Update</button>
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
