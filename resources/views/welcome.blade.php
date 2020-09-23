@extends('layouts.layout');
@section('content')

<h1>Welcome</h1>
<p class="msg">{{session('msg')}}</p>
<a href="{{ route('pizza.create') }}">Order a Pizza</a>
@endsection
