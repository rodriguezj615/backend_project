<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido con exito</title>
</head>
<body>
    <p>Hola {{ $register_mail["name"] }}!</p>
    <p>Mensaje Recibido: {{$register_mail["message"]}}</p>
    <p>El registro se almaceno con exito</p>
</body>
</html>