document.addEventListener("DOMContentLoaded", function() {
    var filas = document.querySelectorAll("table tbody tr");

    filas.forEach(function(fila) {
        var editarBtn = fila.querySelector(".editar");
        var eliminarBtn = fila.querySelector(".eliminar");
        var guardarBtn = fila.querySelector(".guardar");
        var cancelarEditarBtn = fila.querySelector(".cancelarEditar");
        var confirmarEliminarBtn = fila.querySelector(".confirmarEliminar");
        var cancelarEliminarBtn = fila.querySelector(".cancelarEliminar");
        var labelNombres = fila.querySelector(".label_nombres");
        var labelTelefono = fila.querySelector(".label_telefono");
        var labelCorreo = fila.querySelector(".label_correo");
        var inputNombre = fila.querySelector(".input_nombre");
        var inputApellido1 = fila.querySelector(".input_apellido1");
        var inputApellido2 = fila.querySelector(".input_apellido2");
        var inputTelefono = fila.querySelector(".input_telefono");
        var inputCorreo = fila.querySelector(".input_correo");

        fila.addEventListener("click", function(event) {
            var botonClickeado = event.target;
            var fila = botonClickeado.closest("tr");

            if (botonClickeado.classList.contains("editar")) {
                // Ocultar botón editar y mostrar guardar y cancelar
                editarBtn.classList.add("hidden");
                eliminarBtn.classList.add("hidden");
                guardarBtn.classList.remove("hidden");
                cancelarEditarBtn.classList.remove("hidden");

                labelNombres.classList.add("hidden");
                labelTelefono.classList.add("hidden");
                labelCorreo.classList.add("hidden");

                inputNombre.classList.remove("hidden");
                inputApellido1.classList.remove("hidden");
                inputApellido2.classList.remove("hidden");
                inputTelefono.classList.remove("hidden");
                inputCorreo.classList.remove("hidden");
            } else if (botonClickeado.classList.contains("cancelarEditar")) {
                // Ocultar guardar y cancelar, mostrar editar
                guardarBtn.classList.add("hidden");
                cancelarEditarBtn.classList.add("hidden");
                editarBtn.classList.remove("hidden");
                eliminarBtn.classList.remove("hidden");

                labelNombres.classList.remove("hidden");
                labelTelefono.classList.remove("hidden");
                labelCorreo.classList.remove("hidden");

                inputNombre.classList.add("hidden");
                inputApellido1.classList.add("hidden");
                inputApellido2.classList.add("hidden");
                inputTelefono.classList.add("hidden");
                inputCorreo.classList.add("hidden");
            }else if (botonClickeado.classList.contains("guardar")) {
                // Ocultar guardar y cancelar, mostrar editar
                guardarBtn.classList.add("hidden");
                cancelarEditarBtn.classList.add("hidden");
                editarBtn.classList.remove("hidden");
                eliminarBtn.classList.remove("hidden");

                labelNombres.classList.remove("hidden");
                labelTelefono.classList.remove("hidden");
                labelCorreo.classList.remove("hidden");

                inputNombre.classList.add("hidden");
                inputApellido1.classList.add("hidden");
                inputApellido2.classList.add("hidden");
                inputTelefono.classList.add("hidden");
                inputCorreo.classList.add("hidden");
            } else if (botonClickeado.classList.contains("eliminar")) {
                // Ocultar eliminar y mostrar confirmar y cancelar
                eliminarBtn.classList.add("hidden");
                editarBtn.classList.add("hidden");
                confirmarEliminarBtn.classList.remove("hidden");
                cancelarEliminarBtn.classList.remove("hidden");
                
            } else if (botonClickeado.classList.contains("confirmarEliminar")) {
                // Realizar operaciones de eliminación y luego ocultar confirmar y cancelar, mostrar eliminar
                confirmarEliminarBtn.classList.add("hidden");
                cancelarEliminarBtn.classList.add("hidden");
                eliminarBtn.classList.remove("hidden");
                editarBtn.classList.remove("hidden");
                // Agregar código para eliminar el registro con el ID correspondiente (fila.dataset.id)
            }
            else if (botonClickeado.classList.contains("cancelarEliminar")) {
                // Ocultar guardar y cancelar, mostrar editar
                confirmarEliminarBtn.classList.add("hidden");
                cancelarEliminarBtn.classList.add("hidden");
                editarBtn.classList.remove("hidden");
                eliminarBtn.classList.remove("hidden");
            }
        });
    });
});