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



    {{-- hacemos un forech para usuarios --}}
    @foreach($users as $user)
        <div>
            <h3>
                {{$user->name}}
            </h3>
            <p>
                {{$user->email}}
            </p>
        </div>
    @endforeach

</body>
</html>