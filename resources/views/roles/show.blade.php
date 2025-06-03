@extends('layouts/app')
@section('title', 'Listado de Roles')
@section('content')
    <h1>Roles</h1>
    <h5>Listado de roles</h5>
    <hr>
    <a class="btn btn-danger btn-sm" href="/roles/create">Agregar nuevo rol</a>
    <table class="table table-hover table-bordered mt-2">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Fecha creación</th>
            <th>Acciones</th>
        </tr>
        {{-- Listado de productos --}}
        @foreach ($roles as $rol)
        <tr>
            <td>{{ $rol->rol_id }}</td>
            <td>{{ $rol->nombre }}</td>
            <td>{{ $rol->activo == 'Y' ? 'Activo' : 'Inactivo' }}</td>
            <td>{{ $rol->fecha_creacion }}</td> 
            <td>
                <a class="btn btn-success btn-sm" href="/roles/edit/{{ $rol->rol_id }}">Modificar</a>
                <button class="btn btn-danger btn-sm" data-url="/roles/destroy/{{ $rol->rol_id }}" onclick="destroy(this)" data-token="{{ csrf_token() }}">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </table>

@endsection

@section('scripts')
    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/roles.js') }}"></script>
@endsection