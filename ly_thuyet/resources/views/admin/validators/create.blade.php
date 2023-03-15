@extends('admin.layouts.master')
@section('title') Trang quan ly photo  @endsection
@section('content')
<h1>Trang them moi</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('validator.store') }}" method="post" >
    @csrf
    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" name='username' value="{{old('username')}}">

        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="text" class="form-control" name='password' value="{{old('password')}}">
      @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
