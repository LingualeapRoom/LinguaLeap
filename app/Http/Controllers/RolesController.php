<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Roles::all();
        return view('roles.show', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/roles/create');
    }

    /**
     * Store a newly created resource in storage.  
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nombre' => 'required|string|max:100|unique:roles,nombre',
            'activo' => 'required|in:Y,N'
        ]);

        $data['fecha_creacion'] = now();

        Roles::create($data);

        return redirect('/roles/show')->with('success', 'Rol registrado exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roles $rol)
    {
        return view('roles.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roles $rol)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'activo' => 'required|in:Y,N'
        ]);

        // Reemplazar datos anteriores por los nuevos
        $rol->update($request->all());
        return redirect('/roles/show')->with('success', 'Rol actualizado exitosamente');
    }

    public function destroy($id)
    {
        Roles::destroy($id);
        return response()->json(array('res'=>true));
    }
}
