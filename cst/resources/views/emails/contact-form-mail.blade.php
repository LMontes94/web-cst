<!DOCTYPE html>
<html>
<head>
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <h2>Nuevo mensaje de contacto</h2>
    <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
    <p><strong>Apellido:</strong> {{ $details['apellido'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Teléfono:</strong> {{ $details['telefono'] }}</p>
    <p><strong>Mensaje:</strong> {{ $details['message'] }}</p>
</body>
</html>