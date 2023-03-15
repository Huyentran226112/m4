@extends('admin.layouts.master')
@section('title')trang quan ly @endsection
@section('content')


        <h1>@lang('language.welcome')</h1>
        {{$id}}
        <br>
        {{$name}}
        <br>
        {{$age}}
        @foreach($params as $param)
        {{$param}}<br>
        @endforeach

        @if( $age >18)
        <h1>duoc uong bia</h1>
        @else
        <h1>duoc uong ruou</h1>
        @endif
@endsection

@section('scripts')
     <script>
        alert(123)
     </script>
@endsection

