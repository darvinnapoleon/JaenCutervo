<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, 
              initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
        <title>Registrarse</title>
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
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>main" class="menu_link menu_link_select" >Inicio</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>catcon" class="menu_link" >Categoria</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>procon" class="menu_link">Producto</a></li>
                    <li class="menu_item"><a href="<?php echo constant('URL'); ?>alucon" class="menu_link">Alumno</a></li>
                </ul>
                <div class="social-icon">
                    <a href="<?php echo constant('URL'); ?>clises" class="social-icon_link"><span class="icon-user"></span></a>
                    <a href="" class="social-icon_link"><span class="icon-basket"></span></a>
                </div>
            </div>
        </nav>
        <form method="POST" action="<?php echo constant('URL'); ?>nuevo/registrarCliente" name="datusu">
            <table border="0"  class="tabcli">            
                <tr>
                    <td colspan="2"><center><h1>Registrate Ahora</h1></center></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                        if (isset($this->mensaje)) {
                            echo $this->mensaje;
                        }
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td>Nombres:</td>
                    <td width="90%"><input type="text" name="nomcli" placeholder="Darvin Napoleon" required="" class="input inptex"></td>
                </tr>
                <tr>
                    <td>Apellidos:</td>
                    <td><input type="text" name="apecli" placeholder="Tarrillo Fernandez" required="" class="input inptex"></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><input type="text" name="telcli" placeholder="951837400" required="" class="input inptex"></td>
                </tr>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="usucli" placeholder="napotarrillo" required="" class="input inptex"></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><input type="password" name="concli" placeholder="elaventureo2019" required="" class="input inptex"></td>
                </tr>
                <tr>
                    <td>Confirmar...:</td>
                    <td><input type="password" name="concon" placeholder="elaventureo2019" required="" class="input inptex"></td>
                </tr>

                <tr>
                    <td colspan="2"><center><input type="submit" value="Registrarse"  required="" class ="input inpsub"></center></td>  
                </tr>

            </table>
        </form>

<?php require 'views/footer.php';   ?>
    </body>

</html>
