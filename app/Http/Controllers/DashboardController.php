<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('role:admin')->only(['index']);
    //     $this->middleware('role:user')->only(['welcomeUser']);
    // }

    public function index()
    {  
        // clientes
        $totalClientes = Cliente::count();

        // ventas 
        $totalVentas = Venta::count();

        // productos
        $totalProductos = Producto::count();
        $productosEnStock = Producto::where('stock', '>', 0)->count();

        // categorías
        $totalCategorias = Categoria::count();

        // En este caso, eliminamos la línea `activasCategorias`
        return view('dashboard', compact([
            'totalClientes',
            'totalVentas',
            'totalProductos',
            'productosEnStock',
            'totalCategorias'
        ]));
    }

    public function jaja()
    {
        $user = Auth::user(); // Obtén el usuario autenticado

        if ($user->hasRole('admin')) {
            return 'admin';
        }
        if ($user->hasRole('user')) {
            return 'user';
        }
    }
}