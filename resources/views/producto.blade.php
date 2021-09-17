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
                    
                    <form action="{{route('producto.store')}}" method="POST">
                        @csrf

                        <div>
                            <label for="nombre">Nombre</label>
                            <input id="nombre" type="text" name="nombre" class="@error('nombre') is-invalid @enderror">

                            @error('nombre')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="categoria">Categoría</label>
                            <input id="categoria" type="text" name="categoria" class="@error('categoria') is-invalid @enderror">

                            @error('categoria')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="descripcion">Descripción</label>
                            <textarea id="descripcion" name="descripcion" class="@error('descripcion') is-invalid @enderror"></textarea>

                            @error('descripcion')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="precio">Precio</label>
                            <input id="precio" type="number" step="0.01" name="precio" class="@error('precio') is-invalid @enderror">

                            @error('precio')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="stock">Stock</label>
                            <input id="stock" type="number" step="1" name="stock" class="@error('stock') is-invalid @enderror">

                            @error('stock')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="btn">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
