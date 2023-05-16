@extends('login.layoutLogin')

@section('title')
    Sign Up
@endsection

@section('form-content')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Lastname</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">StudentID</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">birthday</label>
        <input type="date" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">phone number</label>
        <input type="tel" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Sign Up</button>
    <div class="text-center mt-3">
        <p>Already have an account? 
            <a href="{{ route('signin') }}">Sing In</a>
        </p>
    </div>
@endsection