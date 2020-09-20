@extends('layouts.layout');
@section('content')
    <p class="msg">{{session('msg')}}</p>

    <ol class="pizzaList">
    @foreach($pizzas as $pizza)
    <li>
        <a href="/pizzas/{{$pizza->id}}">{{$pizza->name}} - {{$pizza->type}} - ({{$pizza->base}})</a>
    </li>
    @endforeach
</ol>

    <a href="/pizzas/create">Order a Pizza</a>

@endsection
