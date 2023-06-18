@extends('layouts.main')

@section('css')
    <link type="text/css" href="{{ asset('css/navbar/navbar.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('/partials.navbar')
    @include('/partials.absensi')
@endsection
