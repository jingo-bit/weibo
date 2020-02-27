@extends('layouts.default')
{{--@section('主页面')--}}
@section('content')

  @if(Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h4>微博列表</h4>
        <hr>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info',['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
    <div class="jumbotron">
      <h1>Hello laravel</h1>
      <p class="lead">你现在所看到的是<a href="https://learnku.com/docs/laravel/5.5/installation/1282">laravel 入门教程</a></p>
      <p>一切将从这里开始</p>
      <p class="btn btn-lg btn-success"><a href="{{ route('signup') }}" role="button" style="color: white">现在注册</a></p>
    </div>
  @endif
@stop
