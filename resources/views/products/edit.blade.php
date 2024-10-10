@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-6 text-blue-600">Editar Producto</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2">Nombre:</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-bold mb-2">Descripción:</label>
                <textarea name="description" id="description" class="border border-gray-300 rounded-lg w-full p-2">{{ $product->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-bold mb-2">Precio:</label>
                <input type="number" name="price" id="price" value="{{ $product->price }}" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-sm font-bold mb-2">Cantidad:</label>
                <input type="number" name="quantity" id="quantity" value="{{ $product->quantity }}" class="border border-gray-300 rounded-lg w-full p-2" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-500 transition duration-300 ease-in-out">
                Actualizar Producto
            </button>
        </form>
    </div>
@endsection
