<?php
    require_once('class_consulta.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Realiza la consulta 'SELECT * FROM alumnos_prueba'</h3>
</body>
</html>
<?php
    $objeto = new Consultas();
    
    $select = $objeto->consultar();

?>