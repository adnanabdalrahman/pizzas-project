@extends('layouts.layout');
@section('content')

    <h1>For Loop</h1>
    @for($i=0;$i<count($pizzas);$i++)
        <p>{{$pizzas[$i]['type']}}</p>
    @endfor

    <h1>Foreach Loop with $Loop variable </h1>
    @foreach($pizzas as $pizza)
            <p>{{$loop->index}} {{$pizza['type']}}
        @if($loop->first)
            <span style="color: rebeccapurple">first in the loop</span>
        @endif
        @if($loop->last)
            <span style="color: rebeccapurple">last in the loop</span>
        @endif
            </p>
    @endforeach

@endsection
