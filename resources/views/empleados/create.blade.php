@extends('layouts.master')

@section('title')
    Crear un nuevo empleado
@endSection

@section('content')
    <h1>Crear un nuevo empleado</h1>
    <a href ="{{ route('empleados.index') }}">Volver</a>

    <form method="post" action="{{ route('empleados.store') }}">
        @csrf
        <br>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <br>
        <br>
        <label for="date">Fecha de nacimiento</label>
        <input type="date" name="date" id="date">
        <br>
        <br>
        <label for="salary">Salario</label>
        <input type="number" name="salary" id="salary">
        <br>
        <br>
        <label for="job">Empleo</label>
        <input type="text" name="job" id="job">
        <br>
        <br>
        <label for="empresa_id">Empresa para la que trabajan</label>
        <select name="empresa_id" id="empresa_id">
            @foreach ($empresas as $empresa)
                <option value="{{ $empresa->id }}">{{ $empresa->name }}</option>
            @endforeach
        </select>

        <button type="submit">Crear</button>
    </form>

@endSection
