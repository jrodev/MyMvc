<div style="margin:5px; text-align:right;"><b>usuario:</b> <?php echo $vars['usu']?></div>
<br />LISTADO DE ASISTENCIA

<table border="1">
    <tr>
        <td>ID</td><td>Nom.</td><td>Ape.</td><td>Dni</td>
        <td>Cisco</td><td>Admision</td><td>Comtel</td><td>Curso</td><td>Eliminar</td><td>Editar</td>
    </tr>
    <?php foreach($vars['regs'] as $i=>$v):?>
    <tr>
        <td><?php echo $v['a_id']?></td>
        <td><?php echo $v['a_nombre']?></td>
        <td><?php echo $v['a_apellido']?></td>
        <td><?php echo $v['a_dni']?></td>
        <td><?php echo $v['a_cisco']?></td>
        <td><?php echo $v['a_admision']?></td>
        <td><?php echo $v['a_comtel']?></td>
        <td><?php echo $v['a_curso']?></td>
        <td>
            <a href="<?php echo BASE?>?c=asistencia&a=listado&id=<?php echo $v['a_id']?>">
                eliminar
            </a>
        </td>
        <td>
            <a href="<?php echo BASE?>?c=asistencia&a=listado&id=<?php echo $v['a_id']?>">
                Editar
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
