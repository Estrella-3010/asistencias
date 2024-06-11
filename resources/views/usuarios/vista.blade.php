<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <h1>Hola Usuario</h1>
    {{-- Generar una lista de 10 usuarios  --}}

    <ul>
        @for ($i = 1; $i<=10;$i++)
            <li> Usuario{{$i}}</li>
        @endfor


    </ul>
    <br>
    <br>



    {{-- mostrar solo números pares --}}

    <ul>
        @for($i=1; $i<=10; $i++)
            @if ($i % 2 == 0)
                <li>Usuario {{$i}}</li>
            @else
                <li>Usuario{{$i}} (impar)</li>
            @endif
        @endfor
    </ul>

    {{-- hacemos un forech para usuarios --}}
    @foreach($usuarios as $usuario)
        <div>
            <h3>
                {{$usuario->nombre}}
            </h3>
            <p>
                {{$usuario->correo}}
            </p>
        </div>
    @endforeach

</body>
</html>