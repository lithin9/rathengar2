@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @yield('header')
@stop

@section('content')
    @yield('content')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @yield('css')
@stop

@section('js')
	@yield('js')
@stop