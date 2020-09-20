@extends('layouts.layout');
@section('content')

    <p>age is {{$age}} </p>

    @if($age<18)
        <p>{{$name}} {{$age}} years old</p>
    @elseif($age>18)
        <p>if age >18 </p>
        <p>Hello {{$name}} your age ({{$age}}) is allowed</p>
    @else
        <p>Hello {{$name}} i don't know your age</p>
    @endif


    <p>Unless is the oppisite of if </p>
    @unless($age <18)
        <p>unless($gae <18) show this </p>
    @endunless



    @php
        //here we can use vanilla Php
        echo $name." => this name ist showed by php code ";

    @endphp


@endsection
