@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-6 text-blue-600">Añadir Nuevo Producto</h2>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-6">
                <h3 class="font-bold">¡Atención!</h3>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nombre del Producto</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name') }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Descripción</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-medium mb-2">Precio</label>
                <input type="text" name="price" id="price" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('price') }}" required>
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-gray-700 font-medium mb-2">Cantidad</label>
                <input type="number" name="quantity" id="quantity" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('quantity') }}" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-600 text-white p-3 rounded-md hover:bg-blue-500 transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Añadir Producto
                </button>
            </div>
        </form>
    </div>
@endsection
