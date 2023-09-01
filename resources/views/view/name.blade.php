<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-mail</title>
</head>

<body>
    <h1>Nuevo Correo</h1>
    <p>Nombre : {{ $sms->name }}</p>
    <p>Email : {{ $sms->email }}</p>
    <p>Asunto : {{ $sms->topic }}</p>
    <p>Mensaje : {{ $sms->message }}</p>
</body>

</html>
