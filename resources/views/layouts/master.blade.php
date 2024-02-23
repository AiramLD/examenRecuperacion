<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen Laravel</title>
</head>

<body>
    <header>
        <h1>Menu de navegación</h1>
        <div>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="{{ route('empresas.index') }}">Empresas</a></li>
                <li><a href="{{ route('empleados.index') }}">Empleados</a></li>
            </ul>
        </div>
    </header>
    <main>
        @section('content')
            <h1>Programa de gestion de empresas y empleados</h1>
        @show
    </main>
    <footer>
        <p>Pié de página By Airam</p>
    </footer>
</body>

</html>
