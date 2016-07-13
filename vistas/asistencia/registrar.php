<form method="post" action="<?php echo BASE?>?c=asistencia&a=registrar">
    <table align="center">
        <?php if(key_exists('msg', $vars)):?>
        <tr><td colspan="2" align="center"><b style="color: #ff0000"><?php echo $vars['msg']?></b></td></tr>
        <?php endif;?>
        <tr><td colspan="2" align="center"><b>Registrar usuario</b></td></tr>
        <tr>
            <td>apellido: </td><td><input name="a_apellido" type="text" /></td>
        </tr>
        <tr>
            <td>nombre: </td><td><input name="a_nombre" type="text" /></td>
        </tr>
        <tr>
            <td>dni: </td><td><input name="a_dni" type="text" /></td>
        </tr>
        <tr>
            <td>correo: </td><td><input name="a_correo" type="text" /></td>
        </tr>
        <tr>
            <td>telefonof: </td><td><input name="a_telefonof" type="text" /></td>
        </tr>
        <tr>
            <td>telefonoc: </td><td><input name="a_telefonoc" type="text" /></td>
        </tr>
        <tr>
            <td>cisco: </td><td><input name="a_cisco" type="checkbox" value="1" /></td>
        </tr>
        <tr>
            <td>admision: </td><td><input name="a_admision" type="checkbox" value="1" /></td>
        </tr>
        <tr>
            <td>admin: </td><td><input name="a_comtel" type="checkbox" value="1" /></td>
        </tr> 
        <tr>
            <td>curso: </td><td><input name="a_curso" type="checkbox" value="1" /></td>
        </tr> 
        <tr><td colspan="2" align="center"><input type="submit" value="REGISTRAR" /></td></tr>
    </table>
</form>
