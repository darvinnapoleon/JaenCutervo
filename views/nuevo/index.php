
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php require 'views/header.php'; ?>
        <div id="main">
            <h1 class="center"> Seccion Nuevo</h1>
            <div class="center"><?php echo $this->mensaje;?></div>
            <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno" method="POST">
                <p>
                    <label for="matricula">Matricula</label><br>
                    <input type="text" name="matricula" id="" required>
                </p>

                <p>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" id="" required>
                </p>
                <p>
                    <label for="apellido">Apellido:</label><br>
                    <input type="text" name="apellido" id="">
                </p>
                <p>
                    <input type="submit" value="Registrar nuevo Alumno" id="" required>
                </p>

            </form>

        </div>
        <?php require 'views/footer.php'; ?>

    </body>
</html>
