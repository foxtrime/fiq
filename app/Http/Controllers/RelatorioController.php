<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Relatorio;
use App\Models\Unidade;
use Carbon\Carbon;
use Auth;

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
            
        
            // $a = Carbon::now()->locale('pt_BR')->format('d-m-Y');
            // dd($a);

        $user_logado = Auth::user();
        
        // dd($user_logado->unidade_id);

        $relatorios = Relatorio::where('unidade_id','=', $user_logado->unidade_id)->get();
        
        // dd($relatorios);

        return view('relatorio.index', compact('relatorios'));
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

        $relatorio = Relatorio::find($id);

        //  dd($relatorio);
        return view('relatorio.update', compact('relatorio'));
    }

    public function update()
    {


    }



}
