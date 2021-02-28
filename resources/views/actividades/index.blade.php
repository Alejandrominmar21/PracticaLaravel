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
                    <a href="{{route('actividades.create')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear una actividad</button></a>
                    <form>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="aforo">Filtrar por Aforo</label>
                        <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="aforo" type="number" placeholder="Aforo">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Filtrar</button>
                    </form>
                    <table class="table-auto"style="width: 70%">
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Aforo</th>                          
                        </tr>
                        @foreach ($actividades as $actividad)
                            <tr>
                                <td>{{$actividad->nombre}}</td>
                                <td>{{$actividad->descripcion}}</td>
                                <td>{{$actividad->aforo}}</td>  
                                <td>   <a href="{{route('actividades.edit', $actividad->id)}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button></a></td>         
                                <td><form action="{{route('actividades.destroy', $actividad)}}" method="POST">@csrf @method('delete')<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Eliminar</button></form></td>                     
                            </tr>
                        @endforeach
                        
                    </table>  
                    {{$actividades->links()}}                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>