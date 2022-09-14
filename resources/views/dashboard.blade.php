@extends('base.base')


@section('css')

@endsection
@section('content')


    <div class="container-fluid  border mx-auto">
        <div class="row  px-4 mx-auto">

            {{--        <div class="main-header">Product <span class="destaque">name</span></div>--}}


            <div class="col-md-4   p-2 mb-5">

                <div class=" card bg-info p-2 ">
                    <div class="-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="bi bi-1-circle"></i>
                            </div>
                            <div class="col-xs-6 text-right">
                                <p class="fw-bold text-center">Profile</p>

                                <p class="text-light fw-bold text-capitalize pt-2">{{ Auth::user()->name }}</p>
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


            <div class="col-md-4  p-2 mb-5">

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
                                <div class="col-6">
                                    <span id="add-post-btn" class="text-light fw-bold text-decoration-none">Add Post</span>

                                </div>
                                <div class="col-6 text-light">
                                    <span id="details" class="text-light fw-bold text-decoration-none">Details</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 p-2 mb-5">

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

            {{--add post--}}
            <div class="px-5 mt-5"  id="add-post">
                <form>
                    <h2 class="text-center bg-info text-light" >Add Post</h2>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Type</option>
                        <option value="1">IT</option>
                        <option value="2">Null</option>
                        <option value="3">Null</option>
                    </select>
                    <div class="mb-3">
                        <label for="tittle" class="form-label">Tittle</label>
                        <input type="text" class="form-control" id="tittle" name="tittle" placeholder="Tittle">
                    </div>
                    <div class="mb-3">
                        <label for="post-text" class="form-label">Post</label>
                        <textarea class="form-control" id="post-text" name="post-text" rows="3"></textarea>
                    </div>
                    <div class="">
                        <button class="btn btn-primary  px-5 mb-4 d-flex ms-auto" id="post-btn" >Post</button>

                    </div>
                </form>


            </div>
            {{--add postd--}}


            {{--    List Post        --}}

            <div class="px-5 mt-5"  id="list-post">
                <h2 class="text-center bg-info text-light">Your Post List</h2>

                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <script>
                let listPost = document.getElementById('list-post');
                let addPost = document.getElementById('add-post');
                let addPostBtn = document.getElementById('add-post-btn');
                let details = document.getElementById('details');

                addPostBtn.addEventListener('click', ()=>{
                    addPost.classList.remove('d-none');
                    addPostBtn.classList.add('text-uppercase');
                    details.classList.remove('text-uppercase');
                    listPost.classList.add('d-none');
                })
                details.addEventListener('click', ()=>{
                    addPost.classList.add('d-none');
                    listPost.classList.remove('d-none');
                    addPostBtn.classList.remove('text-uppercase');
                    details.classList.add('text-uppercase');
                })



            </script>



@push('script')


@endpush


@endsection

