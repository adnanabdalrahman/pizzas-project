@extends('layouts.layout');
@section('content')

<h1>Welcome</h1>
<p class="msg">{{session('msg')}}</p>
<a href="/pizzas/create">Order a Pizza 2 4 5 tenado</a>
<a href="/pizzas/create">this changes from feature1</a>
<a href="/pizzas/create">this changes from feature2 tenado</a>

@endsection
