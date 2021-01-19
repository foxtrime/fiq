<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Relatorio;
use App\Models\Unidade;
use Carbon\Carbon;

class RelatorioController extends Controller
{
    public function index()
    {
        
        // $unidades = Unidade::all();

        // $arr = [];

        // foreach($unidades as $unidade) {
        //     $a = $unidade->id;
        //     array_push($arr, $a);
        // }
        
        // // dd($arr);

        // foreach($arr as $key => $id){
        //     DB::table('relatorios')->insert(['unidade_id' => $id]);
        // }

        return view('relatorio.index');
    }

    public function  create()
    {
        return view('relatorio.create');
    }

    public function store()
    {

    }

    public function edit($id)
    {

        return view('relatorio.update');
    }

    public function update()
    {

    }



}
