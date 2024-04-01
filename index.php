<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="JS/java.js"></script>
    <link rel="stylesheet" href="style/diseño.css">
    <title>Iniciar sesión</title>
</head>
<body>

    <img src="Img/fondo.png" alt="fondo" id="fondo">
    <div class="contenedor_inicio_sesion">
        <div class="inicio_sesion">
            <div class="elemento">
                <img src="Img/usuario.png" alt="img_usuario">
            </div>
            <div class="elemento">
                <h1>BIENVENIDO</h1>
            </div>
            <form action="PHP/BD.php" method="post" enctype="multipart/form-data">
                <div class="elemento">
                    <input type="text" name="codigo" id="codigo" placeholder=" ">
                    <label for="codigo">Código</label>
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="elemento">
                    <input type="password" name="contraseña" id="contraseña" placeholder=" ">
                    <label for="contraseña">Contraseña</label>
                    <i class="fa-solid fa-lock"></i>
                    <a href="#" id="link_ver_contraseña"><i class="fa-regular fa-eye"></i></a>
                </div>
                <div class="elemento">
                    <button type="submit" id="btn_iniciar_sesion" name="btn_iniciar_sesion">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>