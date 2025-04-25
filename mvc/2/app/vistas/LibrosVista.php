<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de libros</title>
</head>
<body>
    <ul>
        <?php
            for ($i=0; $i < count($data); $i++) { 
                echo "<li>" . $data[$i]["titulo"] . "</li>";
            }
        ?>
    </ul>
</body>
</html>