
@extends('base.base')

@section('content')


    <div class="container-fluid ">
    <div class="row  px-4">
        <h1 class="text-center">Admin Dashboard </h1>
        <div class="col-md-3   p-2 mb-5">
        <div class=" card bg-info p-2 ">
            <div class="-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <i class="bi bi-1-circle"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="fw-bold text-center">Profile</p>

                        <p class="text-light fw-bold text-capitalize pt-2">{{Auth::user()->name}}}</p>
                    </div>
                </div>
            </div>
            <a href="profile" style="text-decoration: none; color: #f7fafc">
                <div class="-footer announcement-bottom">
                    <div class="row">
                        <div class="col-xs-6">
                            View
                        </div>
                        <div class="col-xs-6 text-right">
                            <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3  p-2 mb-5">

        <div class=" card bg-danger p-2 -default">
            <div class="-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <i class="fa fa-usd fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="fw-bold text-center ">Post List</p>
                        <p class="text-light fw-bold">Posts : 10</p>
                    </div>
                </div>
            </div>
            <a href="#" style="text-decoration: none ; color: aliceblue">
                <div class="-footer announcement-bottom">
                    <div class="row">
                        <div class="col-xs-6">
                            Details
                        </div>
                        <div class="col-xs-6 text-right">
                            <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <div class="col-md-3  p-2 mb-5">

        <div class=" card bg-danger p-2 -default">
            <div class="-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <i class="fa fa-usd fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="fw-bold text-center ">Authors Requests</p>
                        <p class="text-light fw-bold">Requests : 10</p>
                    </div>
                </div>
            </div>
            <a href="#" style="text-decoration: none ; color: aliceblue">
                <div class="-footer announcement-bottom">
                    <div class="row">
                        <div class="col-xs-6">
                            Details
                        </div>
                        <div class="col-xs-6 text-right">
                            <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <div class="col-md-3  p-2 mb-5">

        <div class=" card bg-danger p-2 -default">
            <div class="-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <i class="fa fa-usd fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="fw-bold text-center ">Users</p>
                        <p class="text-light fw-bold">users : 10</p>
                    </div>
                </div>
            </div>
            <a href="#" style="text-decoration: none ; color: aliceblue">
                <div class="-footer announcement-bottom">
                    <div class="row">
                        <div class="col-xs-6">
                            Details
                        </div>
                        <div class="col-xs-6 text-right">
                            <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
        <div class="col-md-3  p-2 mb-5">

        <div class=" card bg-success p-2 -default">
            <div class="-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <i class="fa fa-usd fa-5x"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="fw-bold text-center ">Saved</p>
                        <p class="text-light fw-bold">Saved : 10</p>
                    </div>
                </div>
            </div>
            <a href="#" style="text-decoration: none ; color: aliceblue">
                <div class="-footer announcement-bottom">
                    <div class="row">
                        <div class="col-xs-6">
                            Details
                        </div>
                        <div class="col-xs-6 text-right">
                            <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <section id="author-request">
        @if ($author)

        <table id="author-request-t" class="display">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Approve</th>
                <th>Cancel</th>
            </tr>
            </thead>
            <tbody>
            @foreach($author as $auther)
                <tr>
                    <td>{{ $auther->id }}</td>
                    <td>{{ $auther->user->name }}</td>
                    <td>
                        <form action="api/test2" method="post" class="d-flex ">
                            @csrf
                            <input type="checkbox" id="verified{{$auther->id}}" class="form-check mx-4" name="" >
                            <input type="hidden" id=" " class="form-check mx-4"  name="user_id" value="{{$auther->id}}" >
                            <button type="submit" class='shadow btn btn-primary  px-4 bx bx-save bx-flashing-hover' id="post-btn"></button>

                        </form>
                    </td>
                    <td><form action="">
{{--                            <input type="checkbox" id="verified{{$auther->id}}" class="form-check" >--}}

                            <button class='shadow btn btn-danger px-4 bx bxs-trash-alt bx-flashing-hover'></button>
                        </form></td>
                </tr>
            @endforeach

            </tbody>
        </table>
        @else
        <h1 class="text-center fw-bold">No Author Request</h1>
    @endif
    </section>
    <script>

        $.ajax({
            method: 'POST',
            url: '/api/user_id',
            // headers: {
            //     'authorization': localStorage.getItem('_fSq_comm')
            // },
            data: {
                'user_id': document.getElementById('user_id'),

            },
            success: function (response) {

            },
            statusCode: {
                400: function () {
                    console.log('error 400')
                }
            },

            error: function (err) {
                console.log(err);
            }

        })

    </script>
@endsection

