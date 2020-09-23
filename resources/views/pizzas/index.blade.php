@extends('layouts.app')
@section('content')
    <p class="msg">{{session('msg')}}</p>

    <ol class="pizzaList">
    @foreach($pizzas as $pizza)
    <li>
        <a href="{{ route('pizza.show',$pizza->id) }}">{{$pizza->name}} - {{$pizza->type}} - ({{$pizza->base}})</a>
    </li>
    @endforeach
</ol>

    <a href="{{ route('pizza.create') }}">Order a Pizza</a>

@endsection
