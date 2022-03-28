<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;

class UserController extends Controller
{
    //IMPLEMENTACION DE INDEZ
    public function index()
    {
        $users = User::get();
  
        return view('users', compact('users'));
    }

    //IMPLEMENTACION DE EXPORTAR
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    //IMPLEMENTACION DE IMPORTAR
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
               
        return back();
    }
}
