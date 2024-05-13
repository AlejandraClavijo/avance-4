<?php

$respuestas_correctas = array(
    'q1' => 'a', // Un conjunto de elementos interconectados que interactúan para lograr un objetivo.
    'q2' => 'c', // Entender y especificar en detalle los requisitos del sistema.
    'q3' => 'b', // Cualquier persona interesada o afectada por el proyecto.
    'q4' => 'c', // Recolección de requisitos.
    'q5' => 'c', // Diagrama de flujo de datos (DFD).
    'q6' => 'b', // Las interacciones entre los actores y el sistema.
    'q7' => 'c', // Una entidad con atributos y métodos.
    'q8' => 'c', // Diagrama de casos de uso.
    'q9' => 'c', // Para describir la interacción entre objetos a lo largo del tiempo.
    'q10' => 'b', // Reemplazar la documentación.
    'q11' => 'a', // La descripción de las tareas que el sistema debe realizar.
    'q12' => 'b', // Aspectos como el rendimiento, seguridad, y escalabilidad del sistema.
    'q13' => 'b', // Entrevistas con stakeholders.
    'q14' => 'd', // Todas las anteriores.
    'q15' => 'a', // La diferencia entre los sistemas actuales y los sistemas futuros requeridos.
    'q16' => 'b', // Desarrollar o instalar el sistema conforme a las especificaciones.
    'q17' => 'c', // Pruebas.
    'q18' => 'c', // Corregir defectos y mejorar funcionalidades.
    'q19' => 'a', // La capacidad de un sistema para manejar un creciente número de tareas o usuarios.
    'q20' => 'b'  // Una revisión para asegurar que el sistema sigue cumpliendo con los requisitos de negocio.
);

$puntaje = 0;
$total_preguntas = count($respuestas_correctas);
$submitted = false;

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $submitted = true;  // Marcamos que el formulario ha sido enviado
    foreach ($respuestas_correctas as $pregunta => $respuesta) {
        if (isset($_POST[$pregunta]) && $_POST[$pregunta] == $respuesta) {
            $puntaje++;
        }
    }
}
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Información del Proyecto</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                margin: 0;
                padding: 0;
                background: linear-gradient(135deg, #667eea, #764ba2);
            }

            .container {
                width: 80%;
                margin: 20px auto;
                padding: 20px;
                background: white;
                border-radius: 10px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }

            h1, h2 {
                text-align: center;
            }

            .box {
                margin-bottom: 20px;
                padding: 20px;
                background: linear-gradient(135deg, #667eea, #764ba2);
                border: 1px solid #ddd;
                border-radius: 8px;
            }

            .box h3 {
                color: #555;
            }

            .box p, .box ul {
                text-align: justify;
            }

            .box ul {
                list-style-position: inside;
            }

            .box li {
                margin-bottom: 10px;
            }
        </style>
    </head>
<body>
    <h1>Encuesta de Conocimientos</h1>
    <?php if (!$submitted): ?>
    <form method="post">
        <!-- Categoría 1 -->
        <h2>Módulo 1: Conceptos Básicos de Sistemas</h2>
        <p>Pregunta 1: ¿Qué es un sistema en el contexto de análisis de sistemas?</p>
        <input type="radio" name="q1" value="a" required> Un conjunto de elementos interconectados que interactúan para lograr un objetivo.<br>
        <input type="radio" name="q1" value="b" required> Una colección de programas de software.<br>
        <input type="radio" name="q1" value="c" required> Un proceso de gestión empresarial.<br>
        <input type="radio" name="q1" value="d" required> Una herramienta de desarrollo de software..<br>

        <p>Pregunta 2: ¿Cuál es el objetivo principal del análisis de sistemas?</p>
        <input type="radio" name="q2" value="a" required> Mejorar el rendimiento financiero de la empresa.<br>
        <input type="radio" name="q2" value="b" required> Desarrollar nuevos productos tecnológicos.<br>
        <input type="radio" name="q2" value="c" required> Entender y especificar en detalle los requisitos del sistema.<br>
        <input type="radio" name="q2" value="d" required> Implementar bases de datos.<br>
        
        <p>Pregunta 3: ¿Qué es un stakeholder en el análisis de sistemas?</p>
        <input type="radio" name="q3" value="a"required> Un inversor en tecnología.<br>
        <input type="radio" name="q3" value="b"required> Cualquier persona interesada o afectada por el proyecto..<br>
        <input type="radio" name="q3" value="c"required> Solamente los miembros del equipo de TI.<br>
        <input type="radio" name="q3" value="d"required> Los clientes que compran el producto final.<br>

        <p>Pregunta 4: ¿Cuál es una actividad fundamental en el análisis de sistemas?</p>
        <input type="radio" name="q4" value="a"required> Diseño de software.<br>
        <input type="radio" name="q4" value="b"required> Venta de soluciones..<br>
        <input type="radio" name="q4" value="c"required> ERecolección de requisitos.<br>
        <input type="radio" name="q4" value="d"required> Capacitación de usuarios.<br>
        
        <p>Pregunta 5: ¿Qué herramienta se usa comúnmente para representar el flujo de datos en un sistema?</p>
        <input type="radio" name="q5" value="a"required> UML.<br>
        <input type="radio" name="q5" value="b"required> Diagrama de Gantt.<br>
        <input type="radio" name="q5" value="c"required> Diagrama de flujo de datos (DFD).<br>
        <input type="radio" name="q5" value="d"required> SCRUM.<br>
        
        <h2>Módulo 2: Modelado de Sistemas</h2>
        <p>Pregunta 6: ¿Qué representa un diagrama de casos de uso?</p>
        <input type="radio" name="q6" value="a"required> La arquitectura del sistema.<br>
        <input type="radio" name="q6" value="b"required> Las interacciones entre los actores y el sistema.<br>
        <input type="radio" name="q6" value="c"required> La secuencia de operaciones en una base de datos.<br>
        <input type="radio" name="q6" value="d"required> El desempeño de un algoritmo.<br>

        <p>Pregunta 7: En UML, ¿qué simboliza una clase?</p>
        <input type="radio" name="q7" value="a"required> Una función del sistema.<br>
        <input type="radio" name="q7" value="b"required> Un actor específico.<br>
        <input type="radio" name="q7" value="c"required> Una entidad con atributos y métodos.<br>
        <input type="radio" name="q7" value="d"required> Un componente de hardware.<br>

        <p>Pregunta 8: ¿Qué técnica de modelado es útil para especificar los requisitos funcionales de un sistema?</p>
        <input type="radio" name="q8" value="a"required> Diagrama de flujo.<br>
        <input type="radio" name="q8" value="b"required> Diagrama de actividades.<br>
        <input type="radio" name="q8" value="c"required> Diagrama de casos de uso.<br>
        <input type="radio" name="q8" value="d"required> Diagrama de estados.<br>

        <p>Pregunta 9: ¿Para qué se utiliza un diagrama de secuencia?</p>
        <input type="radio" name="q9" value="a"required> Para mostrar la estructura de datos.<br>
        <input type="radio" name="q9" value="b"required> Para identificar los componentes del sistema.<br>
        <input type="radio" name="q9" value="c"required> Para describir la interacción entre objetos a lo largo del tiempo.<br>
        <input type="radio" name="q9" value="d"required> Para definir criterios de aceptación del sistema.<br>

        <p>Pregunta 10: ¿Cuál de los siguientes NO es un propósito de la modelación en el análisis de sistemas?</p>
        <input type="radio" name="q10" value="a"required> Desarrollar entendimiento entre los stakeholders.<br>
        <input type="radio" name="q10" value="b"required> Reemplazar la documentación.<br>
        <input type="radio" name="q10" value="c"required> Prever problemas futuros.<br>
        <input type="radio" name="q10" value="d"required> Planificar el desarrollo.<br>

         <h2>Módulo 3: Requisitos del Sistema</h2>
        <p>Pregunta 11: ¿Cuál es el primer paso en el análisis de requisitos del sistema?</p>
        <input type="radio" name="q11" value="a"required> Prueba del sistema.<br>
        <input type="radio" name="q11" value="b"required> Recopilación de requisitos.<br>
        <input type="radio" name="q11" value="c"required> Desarrollo de prototipos.<br>
        <input type="radio" name="q11" value="d"required> Implementación del sistema.<br>

        <p>Pregunta 12: ¿Qué documento describe detalladamente las necesidades y expectativas de los usuarios?</p>
        <input type="radio" name="q12" value="a"required> Plan de proyecto.<br>
        <input type="radio" name="q12" value="b"required> Especificación de requisitos de software (SRS).<br>
        <input type="radio" name="q12" value="c"required> Manual de usuario.<br>
        <input type="radio" name="q12" value="d"required> Diagrama de Gantt.<br>

        <p>Pregunta 13: ¿Qué técnica es efectiva para priorizar los requisitos del sistema?</p>
        <input type="radio" name="q13" value="a"required> Pruebas A/B.<br>
        <input type="radio" name="q13" value="b"required> Diagramación.<br>
        <input type="radio" name="q13" value="c"required> Método MoSCoW.<br>
        <input type="radio" name="q13" value="d"required> Brainstorming.<br>

        <p>Pregunta 14: ¿Qué tipo de requisito especifica cómo debe comportarse el sistema en términos de rendimiento y seguridad?</p>
        <input type="radio" name="q14" value="a"required> Requisitos funcionales.<br>
        <input type="radio" name="q14" value="b"required> Requisitos no funcionales.<br>
        <input type="radio" name="q14" value="c"required> Requisitos de usuario.<br>
        <input type="radio" name="q14" value="d"required> Requisitos de sistema.<br>

        <p>Pregunta 15: ¿Cómo se denomina al proceso de verificar si un sistema satisface sus especificaciones y requisitos?</p>
        <input type="radio" name="q15" value="a"required> Mantenimiento.<br>
        <input type="radio" name="q15" value="b"required> Implementación.<br>
        <input type="radio" name="q15" value="c"required> Validación.<br>
        <input type="radio" name="q15" value="d"required> Verificación.<br>

        <!-- Módulo 4: Implementación y Mantenimiento de Sistemas -->
        <h2>Módulo 4: Implementación y Mantenimiento de Sistemas</h2>
        <p>Pregunta 16: ¿Qué es un despliegue en el contexto de sistemas de software?</p>
        <input type="radio" name="q16" value="a"required> Diseño del sistema.<br>
        <input type="radio" name="q16" value="b"required> Testeo del sistema.<br>
        <input type="radio" name="q16" value="c"required> Lanzamiento del producto final al ambiente de producción.<br>
        <input type="radio" name="q16" value="d"required> Revisión del código.<br>

        <p>Pregunta 17: ¿Qué actividad forma parte del mantenimiento de software?</p>
        <input type="radio" name="q17" value="a"required> Recopilación de requisitos.<br>
        <input type="radio" name="q17" value="b"required> Corrección de errores.<br>
        <input type="radio" name="q17" value="c"required> Diseño inicial.<br>
        <input type="radio" name="q17" value="d"required> Pruebas de usabilidad.<br>

        <p>Pregunta 18: ¿Cuál es una razón común para la actualización de un sistema de software?</p>
        <input type="radio" name="q18" value="a"required> Reducción de personal.<br>
        <input type="radio" name="q18" value="b"required> Cambio de la imagen corporativa.<br>
        <input type="radio" name="q18" value="c"required> Mejoras tecnológicas.<br>
        <input type="radio" name="q18" value="d"required> Reducción de costos operativos.<br>

        <p>Pregunta 19: ¿Qué término describe el proceso de cambiar un sistema para corregir deficiencias identificadas después del despliegue?</p>
        <input type="radio" name="q19" value="a"required> Optimización.<br>
        <input type="radio" name="q19" value="b"required> Reingeniería.<br>
        <input type="radio" name="q19" value="c"required> Escalamiento.<br>
        <input type="radio" name="q19" value="d"required> Refactorización.<br>

        <p>Pregunta 20: ¿Qué aspecto de un sistema es crucial revisar periódicamente para garantizar su salud y funcionamiento óptimo?</p>
        <input type="radio" name="q20" value="a"required> Documentación.<br>
        <input type="radio" name="q20" value="b"required> Código fuente.<br>
        <input type="radio" name="q20" value="c"required> Rendimiento del sistema.<br>
        <input type="radio" name="q20" value="d"required> Compatibilidad con otros sistemas.<br>

        <!-- Botón para enviar las respuestas -->
        <input type="submit" value="Enviar respuestas">
    </form>
 <?php else: ?>
        <h2>Resultados de la encuesta</h2>
        <p>Tu puntuación es <?php echo $puntaje; ?> de <?php echo $total_preguntas; ?>.</p>
        <?php
        if ($puntaje == $total_preguntas) {
            echo "<p>Felicitaciones! Respondiste todas las preguntas correctamente.</p>";
        } elseif ($puntaje > $total_preguntas * 0.75) {
            echo "<p>Muy bien hecho! Tienes una buena comprensión de los temas.</p>";
        } elseif ($puntaje > $total_preguntas * 0.5) {
            echo "<p>Has pasado, pero podrías mejorar.</p>";
        } else {
            echo "<p>Te recomendamos revisar los temas de nuevo, puedes mejorar.</p>";
        }
        ?>
    <?php endif; ?>
</body>
</html>
