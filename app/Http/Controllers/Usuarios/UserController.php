<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ver(){
        //for que genere 10 usuarios 
        $usuarios = [];
        for($i =0; $i < 10; $i++){
            //crea un usuario
            $usuario =new \stdClass();

            //asignar su nombre

            $usuario->nombre = 'Usuario' . $i;
            //asignar un correo
            $usuario->correo = 'usuario' . $i . 'gmail.com';
            //agregar el usuario al array 
            $usuarios[] = $usuario; 
        }
        //sirve para ver el contenido de la variable  g 
        //dd($usuarios);
        //retonar la vista con los usuarios 
        return view('usuarios.vista', compact('usuarios'));
    }

    public function all(){

        //traer todos los usuarios 
        $users = User::all();


        return view('usuarios.users', compact('users'));

    }
}
