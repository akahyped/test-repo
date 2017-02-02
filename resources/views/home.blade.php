@extends('layout')

@section('header')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')

@include('partials/nav')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    The application's core functionality/dashboard will go here!<br>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Admin Panel</div>

                <div class="panel-body">
                    <a href="/admin/" target="_blank">This Admin panel</a> is a place for the webmasters to manage the meta-data of their app/site.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
