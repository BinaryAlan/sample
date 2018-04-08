@extends("layouts.default")
@section("title",'main')
@section("content")
 @if(Auth::check())
    <div class="row">
        <div class="col-md-8">
            <section class="status_form">
                @include('shared._status_form')
            </section>
            <h3>微博列表</h3>
            @include('shared._feed')
        </div>
        <aside class="col-md-4">
            <section class="user_info">
                @include('shared._user_info',['user'=>Auth::user()])
            </section>
            <section class="stats">
              @include('shared._stats', ['user' => Auth::user()])
            </section>
        </aside>
    </div>
 @else
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
 @endif
@stop
