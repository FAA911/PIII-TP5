@extends('layouts.app')

@section('title', 'Edición del producto #' . $product->id)

@section('content')
    <h1>Edición del producto #{{ $product->id }}</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" novalidate>
        @csrf @method('PUT')

        <label for="name">Nombre: </label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}">

        <br>

        <label for="description">Descripción: </label>
        <textarea name="description" cols="30" rows="10">{{ old('description', $product->description) }}</textarea>

        <br>

        <label for="unit_price">Precio unitario: </label>
        <input type="number" name="unit_price" value="{{ old('unit_price', $product->unit_price) }}">

        <br>

        <label for="stock">Stock: </label>
        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}">

        <br>
        
        <button type="submit">Guardar producto</button>
        <a href="{{ route('products.index') }}">Cancelar</a>
    </form>
@endsection