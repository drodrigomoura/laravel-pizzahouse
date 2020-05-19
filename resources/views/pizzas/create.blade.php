@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Ordenar</h1>
    <form action="{{ route('pizzas.store') }}" method="POST">
        @csrf
        <label for="name">Tu Nombre:</label>
        <input type="text" id="name" name="name">

        <label for="type">Selecciona el tipo de Pizza:</label>
        <select name="type" id="type">
            <option value="fugazzeta">Fugazzeta</option>
            <option value="napolitana">Napolitana</option>
            <option value="jamon y Morron">Jamon y Morron</option>
            <option value="española">Española</option>
        </select>

        <label for="base">Selecciona el tipo de Borde:</label>
        <select name="base" id="base">
            <option value="fino y crugiente">Fino y crugiente</option>
            <option value="rellena con Queso">Rellena con Queso</option>
            <option value="rellena con Jamon">Rellena con Jamon</option>
            <option value="clasica">Clasica</option>
        </select>
        <fieldset>
            <label>Ingredientes extra:</label>
            <input type="checkbox" name="toppings[]" value="champiñones">Champiñones<br/>
            <input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni<br/>
            <input type="checkbox" name="toppings[]" value="ajo">Ajo<br/>
            <input type="checkbox" name="toppings[]" value="aceitunas">Aceitunas<br/>
        </fieldset>
        <input type="submit" value="Ordenar una Pizza">
    </form>
</div>
@endsection