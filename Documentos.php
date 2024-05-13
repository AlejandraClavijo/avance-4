<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 20px;
            width: 80%; /* Ajusta el ancho según sea necesario */
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            margin-top: 50px;
        }

        .container:hover {
            transform: scale(1.05);
        }

        h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .pdf-list-item {
            margin-bottom: 10px;
            cursor: pointer;
            padding: 10px;
            background-color: #667eea;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .pdf-list-item:hover {
            background-color: #764ba2;
        }

        .pdf-list-item a {
            color: white;
            text-decoration: none;
            font-weight: 700;
        }

        /* Estilos para el botón de volver */
        .back-button {
            margin-top: 20px;
        }

        .back-button a {
            padding: 10px 20px;
            background-color: #764ba2;
            border-radius: 10px;
            color: white;
            text-decoration: none;
            font-weight: 700;
            transition: background-color 0.3s ease;
        }

        .back-button a:hover {
            background-color: #667eea;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Seleccione el documento que desea ver:</h1>
        <div class="pdf-list-item">
            <a href="documentos/documento1.pdf" target="_blank">Análisis y diseño de sistemas de información</a>
        </div>
        <div class="pdf-list-item">
            <a href="documentos/documento2.pdf" target="_blank">Flor de loto</a>
        </div>
        <div class="pdf-list-item">
            <a href="documentos/documento3.pdf" target="_blank">RUP VS SCRUM</a>
        </div>

        <!-- Sección de comentarios -->
        <div id="comments-section" style="display: none;">
            <h3>Comentarios</h3>
            <textarea id="comment-input" placeholder="Escribe tu comentario..."></textarea>
            <button onclick="postComment()">Publicar Comentario</button>
            <div id="comments-list"></div>
        </div>

        <!-- Botón de Volver a Enlaces.php -->
        <div class="back-button">
            <a href="Enlaces.php">Volver</a>
        </div>
    </div>

    <script>
        function postComment() {
            var commentInput = document.getElementById('comment-input').value;
            var userId = <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 'null'; ?>;

            if (userId) {
                // Solo guarda el comentario si el usuario está autenticado
                var commentElement = document.createElement('div');
                commentElement.textContent = commentInput;

                // Aquí deberías enviar el comentario al servidor junto con el ID del usuario
                saveCommentToDatabase(commentInput, userId); // Llamada a la función que guarda el comentario en la base de datos

                document.getElementById('comments-list').appendChild(commentElement);
                document.getElementById('comment-input').value = '';
            } else {
                alert('Debes iniciar sesión para dejar un comentario.');
            }
        }
        
        function saveCommentToDatabase(comment, userId) {
            // Implementa la lógica para guardar el comentario en la base de datos (PHP)
            // Debes hacer una solicitud AJAX para enviar el comentario y el ID del usuario al servidor
            // Ejemplo:
            /*
            fetch('guardar_comentario.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ comment: comment, userId: userId })
            })
            .then(response => {
                console.log('Comentario guardado en la base de datos.');
            })
            .catch(error => {
                console.error('Error al guardar el comentario:', error);
            });
            */
        }
    </script>
</body>
</html>
