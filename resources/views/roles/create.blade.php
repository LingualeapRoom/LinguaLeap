{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts/app')

{{-- Definimos el título --}}
@section('title', 'Crear Roles')

{{-- Definimos el contenido --}}
@section('content')
    <h1 class="text-center">Crear</h1>
    <h5 class="text-center">Formulario para crear roles</h5>
    <hr>
    <div class="container">
        <form action="/roles/store" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <label>Seleccionar un estado</label>
                    <select class="form-control" id="estado" name="activo" class="form-select" aria-label="Default select example">
                        <option value="Y">Activo</option>
                        <option value="N">Inactivo</option>
                    </select>
                    @error('estado')
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