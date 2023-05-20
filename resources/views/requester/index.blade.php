@extends('layout.layoutapp')

@section('title')
    Home Requester
@endsection

@section('alert')
    
@if (Session::has('success'))
    <script>
        swal("เข้าสู่ระบบสำเร็จ", "ขอให้สนุกกับการเข้าใช้เว็บไซต์", 'success', {
            button:true,
            button:"OK",
            timer:3000,
        });
    </script>
@endif
@endsection

@section('container')
    @foreach ($postData as $data)

        <div class="card bg-light mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="span3 d-flex ">
                        <img src="{{ asset("logo/logo.png") }}" style="max-width: 5%; max-height:auto" alt="">
                        <h6 class="mt-2 mx-2">{{ $data->studentID }}</h6>
                    </div>
                </div>
                <div class="row mt-2">
                    <p>{{ $data->content }}</p>
                    <div class="form-control mt-3">
                        <label for="">แสดงความคิดเห็น</label>
                        <input type="text" class="w-100 border border-light border border-2">
                    </div>
                </div>
            </div>
        </div>
        
    @endforeach
@endsection