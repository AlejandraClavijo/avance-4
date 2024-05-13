<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
class Validacion {
    private $respuestasCorrectas = [
        "p1" => "b", 
        "p2" => "b",
        // Agrega otras respuestas correctas aquí
    ];

    public function calcularPuntuacion($respuestas) {
        $puntuacion = 0;
        foreach ($this->respuestasCorrectas as $pregunta => $respuestaCorrecta) {
            if (isset($respuestas[$pregunta]) && $respuestas[$pregunta] == $respuestaCorrecta) {
                $puntuacion += 5;
            }
        }
        return $puntuacion;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $validacion = new Validacion();
    $puntuacion = $validacion->calcularPuntuacion($_POST);
    echo "Tu puntuación es: $puntuacion % de 100%";
} else {
    echo "Por favor, envía el formulario.";
}
?>

    </body>
</html>
