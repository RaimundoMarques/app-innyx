<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Produto;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function relatorios()
    {
        return view('/relatorios');
    }

    public function visualizar()
    {
        $cliente = Cliente::all();
        $produto = Produto::all();

        $pdf = PDF::loadView('relatorioPdf ', compact('cliente', 'produto'));

        // Visualizar antes de imprimir
        return $pdf->setPaper('a4')->stream('Lista_Clientes.pdf');
    }

    public function imprimir()
    {
        $cliente = Cliente::all();
        $produto = Produto::all();
        $pdf = PDF::loadView('relatorioPdf ', compact('cliente', 'produto'));

        // Para imprimir imediatamente
        return $pdf->download('Lista_Clientes.pdf');
    }



    public function geraPdf()
    {
        $cliente = Cliente::all();
        //dd($cliente);

        $pdf = PDF::loadView('relatorioPdf', compact('cliente'));

        return $pdf->setPaper('a4')->stream('Lista_Clientes.pdf');
    }
}
