<?php

namespace App\Http\Controllers;

use App\Models\User; // Asegúrate de importar el modelo User
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los usuarios
        $users = User::all();

        // Retornar la vista con los datos de los usuarios
        return view('user-list', compact('users'));
    }

    // Otros métodos pueden permanecer vacíos o puedes implementarlos más tarde según sea necesario.
}

