@extends('layouts.app')

@section('title', 'Crear un nuevo producto')

@section('content')
    <h1>Crear un nuevo producto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.store') }}" method="POST" novalidate>
        @csrf

        <label for="name">Nombre: </label>
        <input type="text" name="name" value="{{ old('name') }}">

        <br>

        <label for="description">Descripción: </label>
        <textarea name="description" cols="30" rows="10">{{ old('description') }}</textarea>

        <br>

        <label for="unit_price">Precio unitario: </label>
        <input type="number" name="unit_price" value="{{ old('unit_price') }}">

        <br>

        <label for="stock">Stock: </label>
        <input type="number" name="stock" value="{{ old('stock') }}">

        <br>
        
        <button type="submit">Guardar producto</button>
        <a href="{{ route('products.index') }}">Cancelar</a>
    </form>
@endsection