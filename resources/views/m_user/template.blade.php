@extends('adminlte::page')

@section('title', 'CRUD Laravel')

@section('content_header')
    <h1>M_USER</h1>
@stop

@section('content')
    <div class="container">
        @yield('content_body')
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/your-theme-css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/your-theme-js"></script>
@stop
