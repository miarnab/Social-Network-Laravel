@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    @include('dashboard-navbar')
    <br>
    <br>
    @include('dashboard-content')
    <br>
    <br>
    @include('footer')
@endsection