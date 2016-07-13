<div style="margin:5px; text-align:right;"><b>usuario:</b> <?php echo $vars['usu']?></div>
<br />LISTADO DE USUARIOS

<table border="1">
    <tr>
        <td>ID</td><td>Ape.</td><td>Nom.</td><td>Dni</td>
        <td>Mail</td><td>Tlf.</td><td>Est.</td><td>Eliminar</td><td>Editar</td>
    </tr>
    <?php foreach($vars['regs'] as $i=>$v):?>
    <tr>
        <td><?php echo $v['u_id']?></td>
        <td><?php echo $v['u_apellido']?></td>
        <td><?php echo $v['u_nombre']?></td>
        <td><?php echo $v['u_dni']?></td>
        <td><?php echo $v['u_correo']?></td>
        <td><?php echo $v['u_telefono']?></td>
        <td><?php echo $v['u_estado']?></td>
        <td>
            <a href="<?php echo BASE?>?c=usuario&a=listado&id=<?php echo $v['u_id']?>">
                eliminar
            </a>
        </td>
        <td><a href="<?php echo BASE?>?c=usuario&a=listado&edit=<?php echo $v['u_id']?>">Editar</a></td>
    </tr>
    <?php endforeach; ?>
</table>



