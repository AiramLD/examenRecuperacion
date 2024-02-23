@extends('layouts.master')

@section('title')
    Empresas
@endSection

@section('content')
    <h1>Empresas</h1>
    <p>Aqui puedes gestionar las empresas</p>
    <table>
        <thead>
            <tr>
                <th>ID: </th>
                <th>Nombre: </th>
                <th>Region: </th>
                <th>Ciudad: </th>
                <th>Num de Empleados: </th>
                <th></th>
            </tr>
        </thead>
      <tbody>
        @foreach ($empresas as $empresa)
            <tr>
                <td>{{ $empresa->id }}</td>
                <td>{{ $empresa->name }}</td>
                <td>{{ $empresa->region }}</td>
                <td>{{ $empresa->city }}</td>

                <td>
                    <a href="{{ route('empleados.index', ['empresa_id' => $empresa->id]) }}">
                    {{ $empresa->empleados->count() }}</td>
                    </a>
            </tr>
        @endforeach
      </tbody>
    </table>
@endsection

