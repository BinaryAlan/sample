@extends("layouts.default")
@section("title",'main')
@section("content")
<div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
        a sample project of learn laravel
    </p>
    <p>
        anything,start now
    </p>
    <p>
        <a href="{{route('signup')}}" class="btn btn-lg btn-success" role="button">Register Now</a>
    </p>
</div>
@stop
