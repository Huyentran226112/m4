@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Raising the bar
    </div>
    <!-- Hiển thị trạng thái chưa đăng nhập -->
@if (Session::has('not-login'))
<div class="not-login">
    <p class="text-danger">{{ Session::get('not-login') }}</p>
</div>
@endif 
    <a href="{{ route('user.logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
@endsection
