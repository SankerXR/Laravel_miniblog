
@extends('layouts/default')
@section('title', '首页')


@section('content')
  <div class="jumbotron">
    <h1>Winter is Coming!</h1>
    <p class="lead">
      what you seen is <a href="https://powerful-escarpment-31873.herokuapp.com/">Larave_miniBlog</a>
    </p>
    <p>my watch begins</p>
    <p>
      <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
    </p>
  </div>





@stop
