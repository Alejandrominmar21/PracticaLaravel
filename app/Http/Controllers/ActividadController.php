<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function index(Request $request){
        
        if($request->aforo){
            $actividades = Actividad::where('aforo', '=',  $request->aforo)->paginate();

            return view('actividades.index', compact('actividades'));
        }else{
            $actividades = Actividad::paginate();

            return view('actividades.index', compact('actividades'));
        }
    }

    

    public function create(){
        return view('actividades.create');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'aforo' => 'required|max:50',
        ]);

        $actividad = new Actividad();

        $actividad->nombre = $request->nombre;
        $actividad->descripcion = $request->descripcion;
        $actividad->aforo = $request->aforo;

        $actividad->save();

        return redirect()->route('actividades');
    }

    public function edit($id){
        $actividad = Actividad::find($id);

        return view('actividades.edit', compact('actividad'));
    }

    public function update(Request $request, Actividad $actividad){
        $actividad->nombre = $request->nombre;
        $actividad->descripcion = $request->descripcion;
        $actividad->aforo = $request->aforo;

        $actividad->save();

        return redirect()->route('actividades');
    }

    public function destroy(Actividad $actividad){
        $actividad->delete();;

        return redirect()->route('actividades');
    }
}
