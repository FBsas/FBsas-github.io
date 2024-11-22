<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>

    <h1>Formulario de Contacto</h1>

    <form action="https://formspree.io/f/xovqlwpa" method="POST">
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

		<label for="email">Numero de contacto:</label><br>
        <input type="number" id="movil" name="movil" required><br><br>

        <label for="message">Mensaje:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
