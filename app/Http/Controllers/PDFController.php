<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $users = User::get();


        $data = [
            'title' => 'Generador de PDF - Listado de Usuarios',
            'date' => date('d-m-Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('plantillaPDF', $data);
        return $pdf->download('ListadoUsuarios.pdf');
    }
}
