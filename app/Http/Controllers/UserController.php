<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $e=User::where('ci',$request->ci)->get();
        if ($e->count()>=1){
            return "EXISTENTE";
        }else{
            if ($request->hasFile('foto')){
                $url=$request->file("foto")->store("fotos");
            }else{
                $url="";
            }
        $d=new User();
        $d->paterno=$request->paterno;
        $d->materno=$request->materno;
        $d->nombres=$request->nombres;
        $d->fechanac=$request->fechanac;
        $d->sexo=$request->sexo;
        $d->ci=$request->ci;
        $d->fijo=$request->fijo;
        $d->celular=$request->celular;
        $d->direccion=$request->direccion;
        $d->email=$request->email;
        $d->curso=$request->curso;
        $d->programacion=$request->programacion;
        $d->robotica=$request->robotica;
        $d->capacitacion=$request->capacitacion;
        $d->colegio=$request->colegio;
        $d->foto=$url;
        $d->password= Hash::make( $request->ci);
        $d->save();
        return $d;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
