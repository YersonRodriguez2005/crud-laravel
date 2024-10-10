@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-6 text-blue-600">Nuestros Productos</h2>
        <p class="text-gray-700 mb-6">Aquí encontrarás una variedad de productos de papelería. Desde cuadernos y lápices hasta materiales de oficina, tenemos todo lo que necesitas.</p>
        
        <div class="mb-6">
            <a href="{{ route('products.index') }}" class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-500 transition duration-300 ease-in-out">
                Ver Productos
            </a>
        </div>

        <h3 class="text-xl font-semibold mb-4">Categorías Destacadas</h3>
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <li class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition-shadow duration-300 ease-in-out">
                <h4 class="text-lg font-bold text-blue-500">Papelería Escolar</h4>
                <p class="text-gray-600">Encuentra todo lo necesario para el colegio, desde cuadernos hasta mochilas.</p>
            </li>
            <li class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition-shadow duration-300 ease-in-out">
                <h4 class="text-lg font-bold text-blue-500">Material de Oficina</h4>
                <p class="text-gray-600">Todo para tu oficina: carpetas, bolígrafos, impresoras y más.</p>
            </li>
            <li class="bg-white shadow-md rounded-lg p-4 hover:shadow-lg transition-shadow duration-300 ease-in-out">
                <h4 class="text-lg font-bold text-blue-500">Artículos de Dibujo</h4>
                <p class="text-gray-600">Materiales para artistas: lápices de colores, acuarelas y papel especial.</p>
            </li>
        </ul>
    </div>
@endsection
