<?php
    $conexion = new mysqli("localhost", "root", "", "Registros");
    if(isset($_POST['btn_iniciar_sesion'])){
        $codigo = $_POST['codigo'];
        $contraseña = $_POST['contraseña'];
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE codigo=? AND contraseña=?");
        $stmt->bind_param("ss", $codigo, $contraseña);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 1){
            //ACCIONES EN CASO DE QUE EL USUARIO EXISTA EN LA BD
        }else{
            //ACCIONES EN CASO DE QUE EL USUARIO NO EXISTE EN LA BD
            header("Location: ../index.php");
        }//FIN IF-ELSE
    }//FIN IF
?>