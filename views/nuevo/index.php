<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registrarse</title>
    </head>
    <body>

                <?php require 'views/header.php'; ?>
    
       
        <form method="POST" action="<?php echo constant('URL'); ?>nuevo/registrarCliente" name="datusu">
           
            <table border="0"  class="tabcli">            
                <tr>
                    <td colspan="2"><center><h1>Registrate Ahora</h1></center></td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <?php if(isset($this->mensaje)){echo $this->mensaje;}?> 
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
        
        <?php //require 'views/footer.php'; ?>
    </body>

</html>
