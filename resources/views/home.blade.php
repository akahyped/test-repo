@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    The application's core functionality will go here!<br>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Admin Panel</div>

                <div class="panel-body">
                    <a href="/admin/">This admin panel</a> is meant for the webmaster(s) of the site/app.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
