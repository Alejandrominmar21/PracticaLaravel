<?php  
    $respuesta = Http::get('http://www.recipepuppy.com/api/?i=onions,garlic&q=omelet&p=3');  
    $respuestada = json_decode($respuesta->getBody());
    $recetas = $respuestada->results;
    // print_r($recetas);                      
?>
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
                    <table class="table-auto"style="width: 60%">
                        <tr>
                            <th>Titulo</th>
                            <th>Ingredientes</th>
                            <th>Link</th>                             
                        </tr>
                        @foreach ($recetas as $reserva)
                            <tr> 
                                <td>{{$reserva->title}}</td>
                                <td>{{$reserva->ingredients}}</td>
                                <td>{{$reserva->href}}</td>                                 
                            </tr>
                        @endforeach
                    </table>       
                </div>
            </div>
        </div>
    </div>
</x-app-layout>