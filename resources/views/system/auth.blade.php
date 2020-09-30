@extends('layouts.auth')
@section('stylesheet')
    <link rel="stylesheet" href="{{mix('css/auth.css')}}">
    <link rel="stylesheet" href="{{ asset('js/jquery.formatter.min.js') }}">
@endsection



@section('navbar')
    @include('.partials.auth.navbar')
@endsection
@section('main-app')
    @switch($route)
        @case('home')
        @include('.partials.auth.content')
        @break

        @case('register')
        @include('.partials.auth.register')
        @break

        @case('verify_registration_code')
        @include('.partials.auth.verify_registration_code')
        @break

        @default
        @include('.partials.auth.content')
    @endswitch
@endsection
