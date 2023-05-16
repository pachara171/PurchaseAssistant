@extends('login.layoutLogin')

@section('title')
    Sign In
@endsection

@section('add-text')
    <div class="text-end">
        <a href="{{ route('signup') }}" class="link-secondary text-decoration-none">Sign Up</a>
    </div>
@endsection

@section('form-content')

    <form action="{{ route('checkLogin') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email')
                <div class="invalid-feedback d-block"> {{ $errors->first('email') }} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            @error('password')
              <div class="invalid-feedback d-block"> {{ $errors->first('password') }} </div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember</label>
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
@endsection