<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }
        .container {
            width: 80%;
            max-width: 600px;
            text-align: center;
        }
        .step {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        h1 {
            margin-bottom: 30px;
        }
        h2 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        a {
            color: white;
            text-decoration: underline;
        }
        button {
            padding: 10px 20px;
            background-color: #764ba2;
            border-radius: 10px;
            color: white;
            text-decoration: none;
            font-weight: 700;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #667eea;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>RECUPERAR CONTRASEÑA</h1>

        <!-- Paso #1: Enviar correo con asunto y desde correo institucional -->
        <div class="step">
            <h2>Paso #1: Enviar correo</h2>
            <p>Envía un correo a <a href="mailto:recuperarcontra2024@gmail.com" target="_blank">recuperarcontra2024@gmail.com</a> desde tu correo institucional con el asunto <strong>RECUPERACIÓN CONTRASEÑA</strong>.</p>
        </div>

        <!-- Paso #2: Escribir nombre y código estudiantil -->
        <div class="step">
            <h2>Paso #2: Proporcionar información</h2>
            <p>Escribe tu nombre y código estudiantil en el cuerpo del correo.</p>
        </div>

        <!-- Paso #3: Esperar respuesta con nueva contraseña -->
        <div class="step">
            <h2>Paso #3: Esperar respuesta</h2>
            <p>Espera un máximo de <strong>1 día</strong> para recibir una respuesta con tu nueva contraseña.</p>
        </div>

        <!-- Botón Volver -->
        <button onclick="window.location.href = 'Principal.php';">Volver</button>
    </div>
</body>
</html>
