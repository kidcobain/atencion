<!DOCTYPE html>
<html>
    <head>
        <title>Relaciones</title>
    </head>
    <body>
            

         @foreach($personas as $persona)
            <p>
                {{ $persona->nombre }}
            </p>
            <ul>
            @foreach($persona->solicitudes as $solicitud)
                <li>
                    <strong>{{ $solicitud->id }}</strong>
                    {{ $solicitud->lugar}}
                </li>
            @endforeach
            </ul>
        @endforeach

    </body>
</html>