
@extends('base.base')

@section('content')

<div class="container mt-5">
    <form action="#" id="post-form" class="container">
        <h3 class="shadow text-center text-danger mb-5">Add Post</h3>
        <lable for="" class="fw-bold">Tittle</lable>
        <input class="form-control mb-5" type="text" name="" id="tittle" required>
        <input class="form-control mb-5" type="hidden" value="{{Auth::user()->id}}" name="" id="user_id" required>
        <lable for="" class="fw-bold">Text</lable>
        <input class="form-control mb-5"  type="text" name="" id="text" required>
        <lable for="" class="fw-bold">Type</lable>
        <select class="form-select mb-5" name="" id="type" required>
            <option value="1">IT</option>
            <option value="2">Banking</option>
        </select>
        <button class="btn btn-dark mb-5 " id="add-post-btn">Add Post</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>

<script>

    let add_post_btn = document.getElementById('add-post-btn');
    add_post_btn.addEventListener('click', ()=>{
        console.log('working');
        let add_form = document.getElementById('post-form');


            console.log(add_form.user_id.value);
            $.ajax({
                method: 'POST',
                url: '/api/post',
                // headers: {
                //     'authorization': localStorage.getItem('_fSq_comm')
                // },
                data: {
                    'user_id': add_form.user_id.value,
                    'tittle': add_form.tittle.value,
                    'text': add_form.text.value,
                    'type': add_form.type.value,

                },
                success: function (response) {
                    console.log(response);

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
    }
    );
    //
    //


</script>



@endsection
