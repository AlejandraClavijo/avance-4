<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

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

        .video-list-item {
            margin-bottom: 10px;
            cursor: pointer;
            padding: 10px;
            background-color: #667eea;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .video-list-item:hover {
            background-color: #764ba2;
        }

        .video-list-item a {
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
        <h1>Seleccione su video de acuerdo al tema que desea ver:</h1>
        <div class="video-list-item" onclick="showVideo('rcAAGRp1eHk', 'TEORÍA GENERAL DE SISTEMAS', 'En este video se introducen los conceptos de la teoría general de sistemas para comenzar a entender el trabajo de un analista de sistemas dentro de la Ingeniería de Software.')">
            <a href="#">¿Qué es análisis de sistemas?</a>
        </div>
        <div class="video-list-item" onclick="showVideo('kYi2I6entqg', 'TÉCNICA FLOR DE LOTO', 'Este video está enfocado en explicar la técnica de Flor de Loto, la cual es una herramienta creativa y analítica.')">
            <a href="#">Flor de loto</a>
        </div>
        <div class="video-list-item" onclick="showVideo('YXdHvVj3zpM', 'Rup y Scrum', 'Breve comparativo entre la metodología RUP y SCRUM')">
            <a href="#">Metodología RUP y SCRUM</a>
        </div>

        <div id="video-container" style="display: none;">
            <h2 id="video-title"></h2>
            <div class="video-description" id="video-description"></div>
            <div class="video-container">
                <iframe id="video-iframe" width="1000" height="550" src="" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="comments-section">
                <h3>Comentarios</h3>
                <textarea id="comment-input" placeholder="Escribe tu comentario..."></textarea>
                <button onclick="postComment()">Publicar Comentario</button>
                <div id="comments-list"></div>
            </div>
        </div>

        <!-- Botón de Volver a Enlaces.php -->
        <div class="back-button">
            <a href="Enlaces.php">Volver</a>
        </div>
    </div>

    <script>
        function showVideo(videoId, videoTitle, videoDescription) {
            // Mostrar el contenedor del video
            document.getElementById('video-container').style.display = 'block';

            // Establecer el título y la descripción del video
            document.getElementById('video-title').textContent = videoTitle;
            document.getElementById('video-description').textContent = videoDescription;

            // Construir la URL del video de YouTube
            var videoUrl = 'https://www.youtube.com/embed/' + videoId;
            document.getElementById('video-iframe').src = videoUrl;
        }

        function postComment() {
            var commentInput = document.getElementById('comment-input').value;
            var commentElement = document.createElement('div');
            commentElement.textContent = commentInput;
            document.getElementById('comments-list').appendChild(commentElement);
            document.getElementById('comment-input').value = '';
        }
    </script>
</body>
</html>
