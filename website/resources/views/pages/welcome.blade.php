@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="css/bg.css">
@endsection

@section('content')
    <div>
        @include('/partials.navbar')
    </div>
    @include('/partials.formlogin')
@endsection
