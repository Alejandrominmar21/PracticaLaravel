<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){
        if($request->rol){
            $usuarios = User::where('rol', '=',  $request->rol)->paginate();

            return view('users.index', compact('usuarios'));
        }else{
            $usuarios = User::paginate();

            return view('users.index', compact('usuarios'));
        }
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $usuario = new User();

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->rol = $request->rol;

        $usuario->save();

        return redirect()->route('usuarios');
    }

    public function edit($id){
        $usuario = User::find($id);

        return view('users.edit', compact('usuario'));
    }

    public function update(Request $request, User $usuario){
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->rol = $request->rol;

        $usuario->save();

        return redirect()->route('usuarios');
    }

    public function destroy(User $usuario){
        $usuario->delete();;

        return redirect()->route('usuarios');
    }
    
    
}
