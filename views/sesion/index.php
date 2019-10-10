<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sesiones</title>
    </head>
    <body>
        <?php require 'views/header.php'; ?>
        <form method="POST" action="<?php echo constant('URL'); ?>sesion/valCliente" name="datusu">
            <table border="0"  class=" tabusu">            
                <tr>
                    <td colspan="2"><center><h1>Iniciar sesión</h1></center></td>
                </tr>
                <tr>
                    <td colspan="2"><center><img src="<?php echo constant('URL'); ?>public/img/use.png" width="100" height="100"></center></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php if(isset($this->mensaje)){echo $this->mensaje;}?> 
                    </td>
                </tr>
                
                <tr>
                    <td>Usuario</td>
                    <td><input type="text" name="usucli" placeholder="Tu nombre de usuario" required="" class="input inptex"></td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td><input type="password" name="concli" placeholder="Contraseña" required="" class="input inptex"></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" value="Iniciar sesion"  required="" class ="input inpsub"></center></td>  
                </tr>

            </table>
        </form>
        
        <?php //require 'views/footer.php'; ?>
    </body>

</html>
