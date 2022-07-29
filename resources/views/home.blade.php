@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
    @include('navbar-welcome')
    <br>
    <br>
    @include('register')
    <br>
    <br>
    @include('footer')
@endsection

