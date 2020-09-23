@extends('layouts.app')
@section('content')
    <div>
        <p>My Pizza is {{$pizza->name}} </p>
        <p>Type {{$pizza->type}} </p>
        <p>Base Pizza is {{$pizza->base}} </p>
        <p>Extra Toppings </p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
            @endforeach
        </ul>
    </div>
    <form action="{{ route('pizza.destroy',$pizza->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">X Delete</button>
    </form>

    <a href="/pizzas" class="back"><-- Back to Pizzas</a>


@endsection
