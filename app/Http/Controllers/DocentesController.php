<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocenteRequest;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = User::all();
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocenteRequest $request)
    {
        try {
            $password = Str::random(8);
            $docente = new User();
            $docente->name = $request->name;
            $docente->email = $request->email;
            $docente->password = bcrypt($password);
            $docente->apellido_Paterno = $request->apellido_Paterno;
            $docente->apellido_Materno = $request->apellido_Materno;
            $docente->telefono = $request->telefono;
            $docente->telefono_Emergencia = $request->telefono_Emergencia;
            $docente->grado_Acedemico = $request->grado_Academico;
            $docente->especialidad = $request->especialidad;
            $docente->sub_Especialidad = $request->sub_Especialidad;
            $docente->horas_x_Mes = $request->horas_x_Mes;
            $docente->alergias = $request->alergias;
            $docente->enfermedades_Patologicas = $request->enfermedades_Patologicas;
            $docente->tipo_Rol = $request->tipo_Rol;
            $docente->save();
        } catch (\PDOException $e) {
            return back()->withError("El email ya se encuentra registrado en sistema")->withInput();
        }
        return redirect()->route('docentes.index')->with('create', 'Docente Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = User::find($id);
        return view('docentes.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
