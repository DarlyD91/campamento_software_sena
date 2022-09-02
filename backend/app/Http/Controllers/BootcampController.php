<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bootcamp::all();
        //return "Aqui se mostrarán todos los bootcamps";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Captura el payload
        //Creae el nuevo bootcamp
        return Bootcamp::create(
            $request->all()
        );
        //return "Aqui se va a registrara un nuevo bootcamp (entidad)";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Bootcamp::find($id);
        //return "Mostrar un bootcamp especifico por id";
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
        //1. Encontrar el bootcamp por id
        $b = Bootcamp::find($id);
        //2. Actualizarlo
        $b->update($request->all());
        //3. Enviar response con el bootcamp actualizar
        //Actualizado
        return $b;
        //return "Actualizar un bootcamp especifico cuyo id sea $id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //1. Encontrar el bootcamp por id
        $b = Bootcamp::find($id);

        //2. Eliminarlo
        $b->delete();
        //3. Response con el objeto eliminado
        return $b;
        //return "Eliminar un bootcamp especifico cuyo id sea $id";
    }
}
