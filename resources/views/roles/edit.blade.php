@extends('layouts/app')
@section('title', 'Productos')
@section('content')
    <h1 class="text-center">Modificar</h1>
    <h5 class="text-center">Formulario para actualizar roles</h5>
    <hr>
    <div class="container">
        <form action="/roles/update/{{ $rol->rol_id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{ $rol->nombre }}">
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <label>Seleccionar un estado</label>
                    <select class="form-select" name="activo" aria-label="Default select example">
                        <option value="Y" {{ $rol->activo == 'Y' ? 'selected' : '' }}>Activo</option>
                        <option value="N" {{ $rol->activo == 'N' ? 'selected' : '' }}>Inactivo</option>
                    </select>
                    @error('activo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@endsection