<?php
include_once './load.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>MI SISTEMA ADMIN</title>
    </head>
    <body>
        <table border="1" align="center">
            <tr><td colspan="2" align="center"><h2>MI SISTEMA DE ASISTENCIA</h2></td></tr>
            <tr>
                <td width="180" valign="top">
                    <a href="<?php echo BASE?>?c=index&a=login">Login</a><hr />
                    <a href="<?php echo BASE?>?c=usuario&a=registrar">Registrar Usuario</a><br />
                    <a href="<?php echo BASE?>?c=usuario&a=listado">Listar Usuario</a><hr />
                    <a href="<?php echo BASE?>?c=asistencia&a=registrar">Registrar Asistencia</a><br />
                    <a href="<?php echo BASE?>?c=asistencia&a=listado">Listar Asistencia</a>
                </td>
                <td width="620" align="center" valign="top">
                    <?php $ctrl->getView(); ?>
                </td>
            </tr>
            <tr><td colspan="2" align="center"><b>2014</b></td></tr>
        </table>
    </body>
</html>
