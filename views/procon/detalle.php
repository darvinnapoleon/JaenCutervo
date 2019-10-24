
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, 
              initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/estilos.css">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/fontello.css">
    </head>
    <body>
        <header class="main-header">
            <div class="container container_flex">
                <div class="logo-container column column--50">
                    <h1 class="logo">Golosinas Anita</h1>
                </div>
            </div>
        </header>

        <nav class="main-nav">
            <div class="container container_flex">
                <span class="icon-menu" id="btnmenu"></span>
                <ul class="menu" id="menu">
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>main" class="menu_link" >Inicio</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>catcon" class="menu_link" >Categoria</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>procon" class="menu_link menu_link_select">Producto</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>alucon" class="menu_link">Alumno</a></li>
                </ul>
                <div class="social-icon">
                    <a href="<?php echo constant('URL'); ?>clises" class="social-icon_link"><span class="icon-user"></span></a>
                    <a href="" class="social-icon_link"><span class="icon-basket"></span></a>
                </div>
            </div>
        </nav>
        <div id="main">
            <h1 class="center"> Detalle de:</h1>
            <div class="center"><?php echo $this->mensaje;?></div>
            <form action="<?php echo constant('URL') . 'consulta/actualizarAlumno/' . $this->alumno->matricula; ?>" method="POST">
                <p>
                    <label for="matricula">Matricula</label><br>
                    <input type="text" name="matricula" disabled="" value="<?php echo $this->alumno->matricula; ?>" required>
                </p>

                <p>
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre" value="<?php echo $this->alumno->nombre; ?>" required >
                </p>
                <p>
                    <label for="apellido">Apellido</label><br>
                    <input type="text" name="apellido" value="<?php echo $this->alumno->apellido; ?>">
                </p>
                <p>
                    <input type="submit" value="Actualizar Alumno" id="boton" required>
                </p>

            </form>

        </div>
        <?php require 'views/footer.php'; ?>

    </body>
</html>
