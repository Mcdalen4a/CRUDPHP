<div class="table-responsive">
    <table class="table table-hover" id="table_empleados">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">DNI</th> 
                <th scope="col">Descripion</th>
                <th scope="col">Foto de Perfil</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado) { ?>
                <tr id="empleado_<?php echo $empleado['id']; ?>">
                    <th scope='row'><?php echo $empleado['id']; ?></th>
                    <td><?php echo $empleado['nombre']; ?></td>
                    <td><?php echo $empleado['edad']; ?></td>
                    <td><?php echo $empleado['cedula']; ?></td> 
                    <td><?php echo $empleado['cargo']; ?></td> 
                    <td>
                        <?php
                        $avatar = $empleado['avatar'] ?: 'assets/imgs/sin-foto.jpg';
                        ?>
                        <img class="rounded-circle" src="<?php echo "acciones/fotos_empleados/" . $avatar; ?>" alt="<?php echo $empleado['nombre']; ?>" width="50" height="50">
                    </td>
                    <td>
    <a title="Ver detalles del personaje" href="#" onclick="verDetallesEmpleado(<?php echo $empleado['id']; ?>)" class="btn" style="background-color: rgb(252, 3, 207); color: white;">
        Ver
    </a>
    <a title="Editar datos del personaje" href="#" onclick="editarEmpleado(<?php echo $empleado['id']; ?>)" class="btn" style="background-color: rgb(107, 3, 252); color: white;">
        Editar
    </a>
    <a title="Eliminar datos del personaje" href="#" onclick="eliminarEmpleado(<?php echo $empleado['id']; ?>, '<?php echo $empleado['avatar']; ?>')" class="btn" style="background-color: rgb(250, 35, 114); color: white;">
        Eliminar
    </a>
</td>


                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
