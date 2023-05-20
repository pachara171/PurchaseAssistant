@extends('login.layoutLogin')

@section('title')
    Sign Up
@endsection

@section('alert')
    @if ($errors->any())
        <script>
            swal("เกิดข้อผิดพลาด", "กรุณาตรวจสอบข้อมูลให้ถูกต้อง", 'error', {
                button:true,
                button:"OK",
                timer:3000,
                dangerMode: true,
            });
        </script>
    @endif
@endsection

@section('form-content')

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback d-block">กรุณาใส่ข้อมูล</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lastname</label>
            <input type="text" name="lastname" class="form-control" value="{{ old('lastname') }}">
            @error('lastname')
                <div class="invalid-feedback d-block">กรุณาใส่ข้อมูล</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">StudentID</label>
            <input type="text" name="stdID" class="form-control" value="{{ old('stdID') }}">
            @error('stdID')
                <div class="invalid-feedback d-block">กรุณาใส่ข้อมูลให้ถูกต้อง</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email')
                <div class="invalid-feedback d-block">กรุณาใส่ข้อมูล</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            <p class="text-muted">รหัสผ่านต้องมีอย่างน้อย 4 ตัว</p>
            @error('password')
                <div class="invalid-feedback d-block">กรุณาใส่ข้อมูล</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">birthday</label>
            <input type="date" name="birthdate" class="form-control" value="{{ old('birthdate') }}">
            @error('birthdate')
                <div class="invalid-feedback d-block">กรุณาใส่ข้อมูล</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phone number</label>
            <input type="tel" name="tel" class="form-control" value="{{ old('tel') }}">
            @error('tel')
                <div class="invalid-feedback d-block">กรุณาใส่ข้อมูล</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Sign Up</button>
        <div class="text-center mt-3">
            <p>Already have an account? 
                <a href="{{ route('signin') }}">Sing In</a>
            </p>
        </div>
    </form>
@endsection