@extends('layouts.layout');
@section('content')

<h1>Welcome</h1>
<p class="msg">{{session('msg')}}</p>
<a href="/pizzas/create">Order a Pizza 2 </a>

@endsection
