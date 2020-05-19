@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1>Ordenado por {{ $pizza->name }}</h1>
    <p class="type">Tipo - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <p class="toppings">Ingredientes extra:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Terminar la orden</button>
    </form>
</div>
<a href="{{ route('pizzas.index') }}" class="back"><- Volver</a>
@endsection