<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <form action="/crearUsuario" method="post"> @csrf
        Nombre: <input type="text" name="user"> <br />
        Email: <input type="email" name="email"> <br />
        Password: <input type="password" name="password"> <br />
        <input type="submit" value="Crear">
    </form>


    @isset($usuarioCreado)
        <b> Usuario creado correctamente </b>
    @endisset

    @isset($errores)
        {{ $errores }}
    @endisset
</body>
</html>