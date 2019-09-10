
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php require 'views/header.php'; ?>
        <div id="main">
            <h1 class="center">Ingresar</h1>
            <div class="center"><?php echo $this->mensaje; ?></div>
            <form method="post" action="<?php echo constant('URL'); ?>nuevo/registrarUsuario" name="datusu">
                <p>
                    <label for="nombre">Usuario</label><br>
                    <input type="text" name="nomusu" placeholder="Tu nombre de usuario" required="">
                </p>
                <p>
                    <label for="password">Contraseña</label><br>
                    <input type="password" name="conusu" placeholder="Contraseña" required="">
                </p>
                <p>
                    <input type="submit" value="Registrarse" id="boton" required>
                </p>
            </form>
        </div>
        <?php require 'views/footer.php'; ?>

    </body>
</html>
