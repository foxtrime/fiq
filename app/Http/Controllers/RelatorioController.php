<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Relatorio;
use App\Models\Unidade;
use App\Models\Pergunta_Relatorio_ti;
use App\Models\Ti_Pergunta;
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


        // $teste = Pergunta_Relatorio_ti::all();
        // dd($teste);


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
       
        
        // dd($relatorio->id);
        $perguntas = Ti_Pergunta::all();

        //  dd($perguntas);

        $pergunta_ti = Pergunta_Relatorio_ti::where('relatorio_id','=',$relatorio->id)->get();

        // dd($pergunta_ti);

        // $a = Relatorio::where('id','=', $relatorio->id)->get();
        // $pergunta_ti = Pergunta_Relatorio_ti::where('relatorio_id','=',$relatorio->id)->get();

        // dd($a);
        
        return view('relatorio.update', compact('relatorio','perguntas'));
    }

    public function update()
    {


    }



}
