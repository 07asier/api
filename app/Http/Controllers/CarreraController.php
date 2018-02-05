<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\Console\Helper\Table;
use DB;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function __construct(){

        $this->middleware('apiAuth');

    }

    public function index(Request $request)
    {
        $idcarrera = $request['idcarrera'];
        $idcarrerasec = $request['id_sec'];
        $numserie = $request['numserie'];
        $velocidad = $request['velocidad'];
        $revoluciones = $request['revoluciones'];
        $temperatura = $request['temperatura'];

        /*if(DB::table('carreras') ->where('id_carrera', $idcarrera)->first()){
            //update
            DB::table('carreras')
                ->where('id_carrera', $idcarrera)
                ->update(['velocidad' =>$velocidad , 'revoluciones' => $revoluciones ]);
        }else{
            //insert
            DB::table('carreras')->insert(['usuario_id'=>8,'n_serie'=>$numserie,'velocidad'=>$velocidad,'revoluciones'=>$revoluciones]);
        }*/


        $user = DB::table('coches')->where('num_serie', $numserie)->first();

        DB::table('carreras')->insert(['id_carrera'=>$idcarrera,'id_carrera_secundario'=>$idcarrerasec,'n_serie'=>$numserie,'usuario_id'=>$user->user_id,'velocidad'=>$velocidad,'revoluciones'=>$revoluciones,'temperatura'=>$temperatura]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
