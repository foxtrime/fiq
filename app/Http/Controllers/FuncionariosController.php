<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionarios;
use DataTables;

class FuncionariosController extends Controller
{
   public function index()
   {
    $funcionarios = Funcionarios::all();
    return view('funcionarios.index',compact('funcionarios'));
   }

   public function create()
   {

    return view('funcionarios.create');
   }

   public function store(Request $request)
   {

    $funcionarios = new Funcionarios($request->all());

    $funcionarios->save();

    return redirect(url('/funcionarios'));

   }

   public function show()
   {

   }
 
}
