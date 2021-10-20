<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Proyectos</title>
</head>
<body>
    <h1>GESTOR DE PROYECTOS</h1>
        <?php
            require_once("controladores/controlador.php");
            if (isset($_SESSION['usu_id'])){
                $usu_id = $_SESSION['usu_id'];
                $sql = "SELECT * FROM proyectos WHERE proy_usu_id = " . $usu_id .  "ORDER BY proy_nombre";
                $datos = controlador::select($sql);
            }
        ?>    
</body>
</html>