


@extends('base.base')

@section('content')

    <!-- Section: Design Block -->
    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            The best offer <br />
                            <span class="text-primary">for your business</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                            quibusdam tempora at cupiditate quis eum maiores libero
                            veritatis? Dicta facilis sint aliquid ipsum atque?
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5 card shadow " style="background-color: #4a8d8c73">
                                <form action="{{route('register')}}  " method="post">
                                    @csrf
                                    <h3 class=" card bg-dark text-light  text-center mb-5 p-1">Sign Up</h3>
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row ">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" />
                                                <label class="form-label" for="name">Name</label>
                                                <span class="text-danger">@error('name') {{$message}} @enderror </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="tel" id="phone" name="phone" value="{{old('phone')}}" class="form-control" />
                                                <label class="form-label" for="phone">Phone</label>
                                                <span class="text-danger">@error('phone') {{$message}} @enderror </span>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}" />
                                        <label class="form-label" for="email">Email address</label>
                                        <span class="text-danger">@error('email') {{$message}} @enderror </span>

                                    </div>

                                    <!-- Password input -->
                                    <div class="row">

                                        <div class="form-outline col-6 mb-4">
                                            <input type="password" id="password" name="password" class="form-control" value="{{old('password')}}"/>
                                            <label class="form-label" for="password">Password</label>
                                            <span class="text-danger">@error('password') {{$message}} @enderror </span>

                                        </div>
                                        <div class="form-outline col-6 mb-4">
                                            <input type="password" id="password" name="password_confirmation" class="form-control" value="{{old('password')}}"/>
                                            <label class="form-label" for="password">Password</label>
                                            <span class="text-danger">@error('password') {{$message}} @enderror </span>

                                        </div>
                                    </div>


                                    <!-- Checkbox -->
                                    {{--                                <div class="form-check d-flex justify-content-center mb-4">--}}
                                    {{--                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />--}}
                                    {{--                                    <label class="form-check-label" for="form2Example33">--}}
                                    {{--                                        Subscribe to our newsletter--}}
                                    {{--                                    </label>--}}
                                    {{--                                </div>--}}

                                <!-- Submit button -->
                                    <button type="submit" class="btn btn-dark text-light btn-block mb-4">
                                        Sign up
                                    </button>
                                    <div>
                                        <a href="Login1">Log In</a>
                                    </div>

                                    <!-- Register buttons -->
                                    {{--                                <div class="text-center">--}}
                                    {{--                                    <p>or sign up with:</p>--}}
                                    {{--                                    <button type="button" class="btn btn-link btn-floating mx-1">--}}
                                    {{--                                        <i class="fab fa-facebook-f"></i>--}}
                                    {{--                                    </button>--}}

                                    {{--                                    <button type="button" class="btn btn-link btn-floating mx-1">--}}
                                    {{--                                        <i class="fab fa-google"></i>--}}
                                    {{--                                    </button>--}}

                                    {{--                                    <button type="button" class="btn btn-link btn-floating mx-1">--}}
                                    {{--                                        <i class="fab fa-twitter"></i>--}}
                                    {{--                                    </button>--}}

                                    {{--                                    <button type="button" class="btn btn-link btn-floating mx-1">--}}
                                    {{--                                        <i class="fab fa-github"></i>--}}
                                    {{--                                    </button>--}}
                                    {{--                                </div>--}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
@endsection
