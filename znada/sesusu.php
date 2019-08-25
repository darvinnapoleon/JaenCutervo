<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="StyleSheet" href="css/estgol.css">
    </head>
    <body>
    <center><table>
            <tr>
                <td> <center><?php include 'mencor.php'; ?></center> </td>
            </tr>
        </table></center>
    <center><form method="post" action="controlador/verusu.php"name="datusu">
            <table class="tabusu" border="0">
                <tr>
                    <td style="padding-left: 100px; font-size: 25px;">Ingresar</td>
                </tr>
                <tr>
                    <td><input type="text" name="nomusu" placeholder="Tu nombre de usuario" class="inpusu" required=""></td>
                </tr>
                <tr>
                    <td><input type="password" name="conusu" placeholder="Contraseña" class="inpusu" required=""></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btningusu" value="Ingresar" class="btnusu"></td>
                </tr>
            </table></form>
    </center>

</body>
</html>
