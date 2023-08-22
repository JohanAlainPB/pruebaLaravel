<?php

namespace App\Http\Controllers;

use App\Models\Correos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorreosController extends Controller
{

    //Visualizar todos los datos de la tabla
    public function index()
    {
        return Correos::all();
    }

    //Insertar registros en la tabla
    public function store(Request $request)
    {
        $correos = new Correos;
        $correos->paraCorreos = $request->paraCorreos;
        $correos->asuntoCorreos = $request->asuntoCorreos;
        $correos->contenidoCorreos = $request->contenidoCorreos;
        $correos->save();

        return $correos;
    }

    //Visualizar registros individualmente de la tabla por medio del id
    public function show($id)
    {
        $correos = Correos::find($id);
        return $correos;
    }

    public function update(Request $request, Correos $correos)
    {
        //
    }

    public function destroy(Correos $correos)
    {
        //
    }
}
