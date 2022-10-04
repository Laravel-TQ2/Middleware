<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/login" method="post">@csrf
        Usuario: <input type="text" name="name"> <br />
        Password: <input type="password" name="password"> <br />
        <input type="submit" value="Login">
    </form>

    <a href="/crearUsuario">Crear Usuario</a>

    @isset($errorAutenticacion)
        <b>Error de credenciales</b>
    @endisset
</body>
</html>