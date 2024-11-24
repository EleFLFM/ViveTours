<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tour;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Contar clientes (usuarios con rol 'cliente')
        $clientesCount = User::role('cliente')->count(); // Usa Spatie para filtrar por rol

        // Contar tours disponibles
        $toursCount = Tour::count();

        // Retornar los datos a la vista
        return view('admin.dashboard', compact('clientesCount', 'toursCount'));
    }
}

