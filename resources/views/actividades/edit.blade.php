<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 self-center">
                    <h1> Editar una actividad </h1>
                    <form action="{{route('actividades.update', $actividad)}}" method="POST">
                        @csrf

                        @method('put')

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Nombre</label>
                        <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nombre" type="text" placeholder="Nombre" value="{{$actividad->nombre}}"><br>

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">Descripción</label>
                        <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="descripcion" type="text" placeholder="Descripción" value="{{$actividad->descripcion}}">

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="aforo">Aforo</label>
                        <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="aforo" type="number" placeholder="Aforo" value="{{$actividad->aforo}}">
                        <br>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>