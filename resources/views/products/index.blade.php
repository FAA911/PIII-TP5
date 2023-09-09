@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <a href="{{ route('products.create') }}">Agregar</a>

    @if ($products->count())
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio Unitario</th>
                    <th>Stock</th>
                    <th>Última actualización</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>$ {{ $product->unit_price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->update_at }}</td>
                        <td>
                            {{-- Botones de acción VER, EDITAR y ELIMINAR --}}
                            <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                        
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h4>¡No hay productos cargados!</h4>
    @endif
@endsection