@extends('layouts.main')

@section('css')
    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/login_registrasi/login_registrasi.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/navbar/navbar.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('/partials.navbar')
    @include('/partials.login')
@endsection
