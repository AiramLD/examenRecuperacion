@extends('layouts.master')

@section('title')
    Empleados
@endSection

@section('content')
    <h1>Empleados</h1>
    <p>Aqui puedes gestionar los empleados</p>

<table>
    <thead>
        <tr>
          <th>Nombre: </th>
          <th>Fecha de nacimiento: </th>
          <th>Salario: </th>
          <th>Empleo: </th>
          <th>Empresa para la que trabajan: </th>

          <th>Borrar un empleado </th>

        </tr>
    </thead>

    <tbody>
        <a href="{{ route('empleados.create') }}">Crear un nuevo empleado</a>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->name }}</td>
                <td>{{ $empleado->date }}</td>
                <td>{{ $empleado->salary }}</td>
                <td>{{ $empleado->job }}</td>
                <td>
                     {{$empleado->empresa->name}}
                </td>
                <td>
                    <form method="post" action= "{{ route('empleados.destroy', $empleado->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                </td>
                <td>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endSection
