<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Precio</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $products as $product )
                            <tr>
                                <td>{{ $product->nombre }}</td>
                                <td>{{ $product->categoria }}</td>
                                <td>{{ $product->precio }}</td>
                                <td>{{ $product->stock }}</td>
                            </tr>
        
                        @endforeach
                    </tbody>
                </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
