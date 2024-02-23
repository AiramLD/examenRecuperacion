<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('empleados.create', compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'empresa_id' => 'required',
            'name' => 'required',
            'date' => 'required',
            'salary' => 'required',
            'job' => 'required',
        ]);

        $empleado = new Empleado();
        $empleado->empresa_id  = $request->input('empresa_id');
        $empleado->name  = $request->input('name');
        $empleado->date  = $request->input('date');
        $empleado->salary  = $request->input('salary');
        $empleado->job  = $request->input('job');

        $empleado->save();
        return redirect()->route('empleados.index')-> with('success', 'Empleado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id = null)
    {
        $empleado = Empleado::find($id);

        if($empleado){
            $empleado->delete();

            return redirect()->route('empleados.index')-> with('success', 'Empleado deleted successfully.');

        }else{
            return redirect()->route('empleados.index')-> with('success', 'Empleado not found.');

        }
    }


}
