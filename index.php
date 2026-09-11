<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Variables en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .variable {
            background-color: #e8f4f8;
            padding: 10px;
            margin: 10px 0;
            border-left: 4px solid #2196F3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Práctica de Variables en PHP</h1>
        
        <?php
            // Variables de texto (String)
            $nombre = "Juan";
            $apellido = "Pérez";
            $ciudad = "Madrid";
            
            // Variables numéricas
            $edad = 25;
            $altura = 1.75;
            $salario = 2500.50;
            
            // Variables booleanas
            $esEstudiante = true;
            $tieneExperiencia = false;
            
            // Arrays
            $asignaturas = array("PHP", "JavaScript", "HTML/CSS", "SQL");
            $calificaciones = ["PHP" => 9.5, "JavaScript" => 8.7, "HTML/CSS" => 9.2];
            
            // Mostrar información personal
            echo "<div class='variable'>";
            echo "<h2>Información Personal</h2>";
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Apellido:</strong> $apellido</p>";
            echo "<p><strong>Edad:</strong> $edad años</p>";
            echo "<p><strong>Ciudad:</strong> $ciudad</p>";
            echo "<p><strong>Altura:</strong> $altura metros</p>";
            echo "</div>";
            
            // Mostrar información laboral
            echo "<div class='variable'>";
            echo "<h2>Información Laboral</h2>";
            echo "<p><strong>Salario:</strong> \$$salario</p>";
            echo "<p><strong>¿Es estudiante?:</strong> " . ($esEstudiante ? "Sí" : "No") . "</p>";
            echo "<p><strong>¿Tiene experiencia?:</strong> " . ($tieneExperiencia ? "Sí" : "No") . "</p>";
            echo "</div>";
            
            // Mostrar asignaturas
            echo "<div class='variable'>";
            echo "<h2>Asignaturas</h2>";
            echo "<ul>";
            foreach ($asignaturas as $asignatura) {
                echo "<li>$asignatura</li>";
            }
            echo "</ul>";
            echo "</div>";
            
            // Mostrar calificaciones
            echo "<div class='variable'>";
            echo "<h2>Calificaciones</h2>";
            foreach ($calificaciones as $asignatura => $nota) {
                echo "<p><strong>$asignatura:</strong> $nota/10</p>";
            }
            echo "</div>";
            
            // Operaciones con variables
            echo "<div class='variable'>";
            echo "<h2>Operaciones con Variables</h2>";
            $nombreCompleto = $nombre . " " . $apellido;
            $proximaEdad = $edad + 1;
            $promedio = ($calificaciones["PHP"] + $calificaciones["JavaScript"] + $calificaciones["HTML/CSS"]) / 3;
            
            echo "<p><strong>Nombre Completo:</strong> $nombreCompleto</p>";
            echo "<p><strong>Edad el próximo año:</strong> $proximaEdad años</p>";
            echo "<p><strong>Promedio de calificaciones:</strong> " . round($promedio, 2) . "/10</p>";
            echo "</div>";
        ?>
    </div>
</body>
</html>