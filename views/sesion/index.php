<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sesiones</title>
    </head>
    <body>
        <?php require 'views/header.php'; ?>
        <div id="main">
            <h1 class="center">Iniciar sesión</h1>
            <div class="center"><?php if(isset($this->mensaje)){echo $this->mensaje;}?> </div>
            <form method="POST" action="<?php echo constant('URL'); ?>sesion/valCliente" name="datusu">
                <p>
                    <label for="nombre">Usuario</label><br>
                    <input type="text" name="usucli" placeholder="Tu nombre de usuario" required="">
                </p>
                <p>
                    <label for="password">Contraseña</label><br>
                    <input type="password" name="concli" placeholder="Contraseña" required="">
                </p>
                <p>
                    <input type="submit" value="Iniciar sesion" id="boton" required="">
                </p>
            </form>
        </div>
        <?php require 'views/footer.php'; ?>
    </body>
</html>>
</html>
