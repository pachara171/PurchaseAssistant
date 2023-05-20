@extends('login.layoutLogin')

@section('title')
    Sign In
@endsection

@section('alert')
    @if (Session::has('success'))
        <script>
            swal("{{ Session::get('success') }}", "กรุณาเข้าสู่ระบบ", 'success', {
                button:true,
                button:"OK",
                timer:3000,
            });
        </script>
    @endif
    @if ($errors->has('errorLogin'))
        <script>
            swal("Error", "กรุณาตรวจสอบบัญชีผู้ใช้และรหัสผ่านให้ถูกต้อง", 'error', {
                button:true,
                button:"OK",
                // timer:3000,
                dangerMode: true,
            });
        </script>
    @endif
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
                <div class="invalid-feedback d-block"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            @error('password')
                <div class="invalid-feedback d-block"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember</label>
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
@endsection