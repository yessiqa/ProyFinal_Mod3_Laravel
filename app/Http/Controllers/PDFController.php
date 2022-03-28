<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $clientes = Cliente::get();


        $data = [
            'title' => 'Listado de Clientes',
            'date' => date('d-m-Y'),
            'clientes' => $clientes
        ];

        $pdf = PDF::loadView('plantillaPDF', $data);
        return $pdf->download('ListadoClientes.pdf');
    }
}
