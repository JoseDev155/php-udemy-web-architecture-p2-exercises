<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <h2>Libros de finanzas personales</h2>
    <ul>
        <?php
            foreach ($datos as $valor) {
                print "<li>".$valor["titulo"].", ".$valor["autor"]."</li>";
            }
        ?>
    </ul>
</body>
</html>