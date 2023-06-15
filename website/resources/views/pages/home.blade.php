@extends('layouts.layouts')

@section('css')
    <link rel="stylesheet" href="css/bg.css">
    <link rel="stylesheet" href="css/form/login.css">
@endsection

@section('content')
    @include('/partials.navbar')
    @include('/partials.formlogin')
@endsection
