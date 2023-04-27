<!DOCTYPE html>
<html>
<head>
    <title>Mensaje de contacto</title>
</head>
<body>
    <h1>Nuevo mensaje de contacto</h1>
    <p>Nombre: {{ $data['nombre'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Mensaje:</p>
    <p>{{ $data['mensaje']}}</p>
</body>
</html>
