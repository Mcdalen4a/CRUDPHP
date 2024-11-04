window.actualizarEmpleadoEdit = async function (idEmpleado) {
  try {
    const response = await axios.get(
      `acciones/getEmpleado.php?id=${idEmpleado}`
    );
    if (response.status === 200) {
      const infoEmpleado = response.data; // Obtener los datos del empleado desde la respuesta

      let tr = document.querySelector(`#empleado_${idEmpleado}`);
      let tablaHTML = "";
      tablaHTML += `
          <tr id="empleado_${infoEmpleado.id}">
            <th class="dt-type-numeric sorting_1" scope="row">${infoEmpleado.id}</th>
            <td>${infoEmpleado.nombre}</td>
            <td>${infoEmpleado.edad}</td>
            <td>${infoEmpleado.cedula}</td>
            <td>${infoEmpleado.cargo}</td>
            <td>
              <img class="rounded-circle" src="acciones/fotos_empleados/${infoEmpleado.avatar || "sin-foto.jpg"}" alt="${infoEmpleado.nombre}" width="50" height="50">
            </td>
            <td>
              <a title="Ver detalles del empleado" href="#" onclick="verDetallesEmpleado(${infoEmpleado.id})" class="btn btn-ver">Ver</a>
              <a title="Editar datos del empleado" href="#" onclick="editarEmpleado(${infoEmpleado.id})" class="btn btn-editar">Editar</a>
              <a title="Eliminar datos del empleado" href="#" onclick="eliminarEmpleado(${infoEmpleado.id}, '${infoEmpleado.avatar || ""}')" class="btn btn-eliminar">Eliminar</a>
            </td>
          </tr>
        `;

      // Actualizar el contenido HTML de la tabla
      tr.innerHTML = tablaHTML;
    }
  } catch (error) {
    console.error("Error al obtener la información del empleado", error);
  }
};
