@extends('layout.layoutapp')

@section('title')
    Home Responder
@endsection

@section('container')

    <div class="card bg-light mt-5">
        <div class="card-body">
            <div class="row">
                <div class="span3 d-flex ">
                    <img src="{{ asset("logo/logo.png") }}" style="max-width: 5%; max-height:auto" alt="">
                </div>
                <form action="{{ route('post.store') }} " method="post">
                    @csrf
                    <div class="form-control mt-3">
                        <label for="">ประชาสัมพันธ์</label>
                        <textarea class="form-control" name="content"  id="exampleFormControlTextarea1" rows="5"></textarea>
                        @error('content')
                            <div class="invalid-feedback">กรุณาใส่ข้อมูล</div>d-block
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-info mt-3">post</button>
                </form>
            </div>
        </div>
    </div>

@endsection