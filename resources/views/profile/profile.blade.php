
@extends('base.base')

@section('content')
    <div class="container">

        <div class="main-body mt-5">



            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">


                                    <h4 class="text-capitalize">{{$data->name}}</h4>
                                    <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8" id="non-edit">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$data->name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$data->email}}
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$data->phone}}
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-3"></div>

                                <div class="col-sm-9">
                                    <span class="btn btn-primary " id="edit-btn" >Edit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-8">
                        <div class="card d-none" id="edit">
                            <form>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{$data->name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{$data->email}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{$data->phone}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="button" class="btn btn-primary px-4" value="Save Changes">
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>




        </div>
    </div>
    <script>
        let edit_btn = document.getElementById('edit-btn');
        let edit = document.getElementById('edit');
        let non_edit = document.getElementById('non-edit');
        edit_btn.addEventListener('click',()=>{
            edit.classList.remove('d-none');
            non_edit.classList.add('d-none');
        })
    </script>

@endsection
