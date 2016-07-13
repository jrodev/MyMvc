
<form action="<?php echo BASE?>/index.php?c=index&a=login" method="post">
    <table>
        <?php if(key_exists('msg',$vars)): ?>
        <tr>
            <td colspan="2">
                <b style="color:#ff0000"><?php echo $vars['msg']?></b>
            </td>
        </tr>
        <?php endif;?>
        <tr>
            <td>Usuario:</td><td><input type="text" name="usuario" /></td>
        </tr>
        <tr>
            <td>clave:</td><td><input type="password" name="clave" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="ENTRAR" /></td>
        </tr>
    </table>
</form>