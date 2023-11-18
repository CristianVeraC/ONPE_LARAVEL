<?php

namespace App\Http\Controllers;
use Illuminate\Http\Raquest;
use Illuminate\Support\Facades\DB;

class OnpeController extends Controller {


    public function index(){
        return view('index');
    }

    public function participacion(){
        $participacion = DB::select('call sp_getVotosDepartamentos');
        return view ('participacion',['participacion' => $participacion] );
    }

    public function participacion_total($id){
        $participacion_total = DB::select('call sp_getVotos(1,25)');
        return view ('participacion', ['participacion' => $participacion_total]);
    }

    public function actas_numeros($id){
        $actas_numeros = DB::select('call_ sp_getVotos',[ $id == '' ? 1 : 2 ]);
        return view('actas_numeros',['actas_numeros' => $actas_numeros]);
    }

    public function actas_ubigeo($id) {
        return ('actas_ubigeo');
    }

}
