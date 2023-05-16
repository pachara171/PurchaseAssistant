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
                <div class="form-control mt-3" style="height: 10rem">
                    <label for="">ประชาสัมพันธ์</label>
                    <input type="text" class="w-100 h-75 border border-light border border-2">
                </div>
            </div>
        </div>
    </div>

@endsection