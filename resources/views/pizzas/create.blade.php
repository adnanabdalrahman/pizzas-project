@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="{{ route('pizza.store') }}" method="post">
        @csrf <!-- important to read laravel form (avoid attacking) -->
        <label for="name">Your name:</label>
        <input type="text" id="type" name="name"/>

        <label for="type">Choose Pizza Type </label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg supreme</option>
            <option value="volcano">Volcano</option>
        </select>

        <label for="base">Choose base Type </label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">Garlic crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
            <fieldset>
                <label for="">Extra toppings</label>
                <input type="checkbox" name="toppings[]"  value="mushrooms">Mashrooms<br />
                <input type="checkbox" name="toppings[]"  value="peppers">Peppers<br />
                <input type="checkbox" name="toppings[]"  value="garlic">Garlic<br />
                <input type="checkbox" name="toppings[]"  value="olives">Olives<br />
            </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
