<!DOCTYPE html>
<html>
<head>
    <title>Mensaje de contacto</title>
</head>
<body>
    <h1>Mensaje de contacto</h1>
    <p>Nombre: {{ $data['name'] }}</p>
    <p>Correo electrónico: {{ $data['email'] }}</p>
    <p>Mensaje: {{ $data['message'] }}</p>
</body>
</html>