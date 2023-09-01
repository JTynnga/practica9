<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>

<body>
    <form action="/api/mail" method="POST">
        <h1>Formulario para enviar Email</h1>

        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Correo Electronico:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="topic ">Asunto :</label><br>
        <input type="text" id="topic" name="topic" required><br>

        <label for="message">Mensaje:</label><br>
        <input type="text" id="message" name="message" required><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>
