document.addEventListener("DOMContentLoaded", function() {
    var filas = document.querySelectorAll("table tbody tr");

    filas.forEach(function(fila) {
        var editarBtn = fila.querySelector(".editar");
        var eliminarBtn = fila.querySelector(".eliminar");
        var guardarBtn = fila.querySelector(".guardar");
        var cancelarEditarBtn = fila.querySelector(".cancelarEditar");
        var confirmarEliminarBtn = fila.querySelector(".confirmarEliminar");
        var cancelarEliminarBtn = fila.querySelector(".cancelarEliminar");
        
        // Agrega las clases y elementos específicos de las propiedades
        var labelTitulo = fila.querySelector(".label_titulo");
        var labelPais = fila.querySelector(".label_pais");
        var labelEstado = fila.querySelector(".label_estado");
        var labelMunicipio = fila.querySelector(".label_municipio");
        var labelCodigo_postal = fila.querySelector(".label_codigo_postal");
        var labelCalle = fila.querySelector(".label_calle");
        var labelColonia = fila.querySelector(".label_colonia");
        var labelNumero = fila.querySelector(".label_numero");
        var labelTipo_inmueble = fila.querySelector(".label_tipo_inmueble");
        var labelTipo_contrato = fila.querySelector(".label_tipo_contrato");
        var labelPrecio = fila.querySelector(".label_precio");
        var labelArea = fila.querySelector(".label_area");
        var labelPisos = fila.querySelector(".label_pisos");
        var labelRecamaras = fila.querySelector(".label_recamaras");
        var labelBanos = fila.querySelector(".label_banos");
        var labelCocheras = fila.querySelector(".label_cocheras");
        var labelJardin = fila.querySelector(".label_jardin");
        var labelJardin_area = fila.querySelector(".label_jardin_area");
        var labelPiscina = fila.querySelector(".label_piscina");
        var labelDescripcion = fila.querySelector(".label_descripcion");

        // ... Agrega las demás etiquetas específicas de las propiedades ...

        var inputTitulo = fila.querySelector(".input_titulo");
        var inputPais = fila.querySelector(".input_pais");
        var inputEstado = fila.querySelector(".input_estado");
        var inputMunicipio = fila.querySelector(".input_municipio");
        var inputCodigo_postal = fila.querySelector(".input_codigo_postal");
        var inputCalle = fila.querySelector(".input_calle");
        var inputColonia = fila.querySelector(".input_colonia");
        var inputNumero = fila.querySelector(".input_numero");
        var inputTipo_inmueble = fila.querySelector(".input_tipo_inmueble");
        var inputTipo_contrato = fila.querySelector(".input_tipo_contrato");
        var inputPrecio = fila.querySelector(".input_precio");
        var inputArea = fila.querySelector(".input_area");
        var inputPisos = fila.querySelector(".input_pisos");
        var inputRecamaras = fila.querySelector(".input_recamaras");
        var inputBanos = fila.querySelector(".input_banos");
        var inputCocheras = fila.querySelector(".input_cocheras");
        var inputJardin = fila.querySelector(".input_jardin");
        var inputJardin_area = fila.querySelector(".input_jardin_area");
        var inputPiscina = fila.querySelector(".input_piscina");
        var inputDescripcion = fila.querySelector(".input_descripcion");
        // ... Agrega los demás campos específicos de las propiedades ...

        fila.addEventListener("click", function(event) {
            var botonClickeado = event.target;
            var fila = botonClickeado.closest("tr");

            if (botonClickeado.classList.contains("editar")) {
                // Ocultar botón editar y mostrar guardar y cancelar
                editarBtn.classList.add("hidden");
                eliminarBtn.classList.add("hidden");
                guardarBtn.classList.remove("hidden");
                cancelarEditarBtn.classList.remove("hidden");

                // Ocultar etiquetas y mostrar campos de edición
                labelTitulo.classList.add("hidden");
                labelPais.classList.add("hidden");
                labelEstado.classList.add("hidden");
                labelMunicipio.classList.add("hidden");
                labelCodigo_postal.classList.add("hidden");
                labelCalle.classList.add("hidden");
                labelColonia.classList.add("hidden");
                labelNumero.classList.add("hidden");
                labelTipo_inmueble.classList.add("hidden");
                labelTipo_contrato.classList.add("hidden");
                labelPrecio.classList.add("hidden");
                labelArea.classList.add("hidden");
                labelPisos.classList.add("hidden");
                labelRecamaras.classList.add("hidden");
                labelBanos.classList.add("hidden");
                labelCocheras.classList.add("hidden");
                labelJardin.classList.add("hidden");
                labelJardin_area.classList.add("hidden");
                labelPiscina.classList.add("hidden");
                labelDescripcion.classList.add("hidden");
                // ... Oculta y muestra las demás etiquetas y campos específicos de las propiedades ...

                inputTitulo.classList.remove("hidden");
                inputPais.classList.remove("hidden");
                inputEstado.classList.remove("hidden");
                inputMunicipio.classList.remove("hidden");
                inputCodigo_postal.classList.remove("hidden");
                inputCalle.classList.remove("hidden");
                inputColonia.classList.remove("hidden");
                inputNumero.classList.remove("hidden");
                inputTipo_inmueble.classList.remove("hidden");
                inputTipo_contrato.classList.remove("hidden");
                inputPrecio.classList.remove("hidden");
                inputArea.classList.remove("hidden");
                inputPisos.classList.remove("hidden");
                inputRecamaras.classList.remove("hidden");
                inputBanos.classList.remove("hidden");
                inputCocheras.classList.remove("hidden");
                inputJardin.classList.remove("hidden");
                inputJardin_area.classList.remove("hidden");
                inputPiscina.classList.remove("hidden");
                inputDescripcion.classList.remove("hidden");
                // ... Oculta y muestra los demás campos específicos de las propiedades ...
            } else if (botonClickeado.classList.contains("cancelarEditar")) {
                // Ocultar guardar y cancelar, mostrar editar
                guardarBtn.classList.add("hidden");
                cancelarEditarBtn.classList.add("hidden");
                editarBtn.classList.remove("hidden");
                eliminarBtn.classList.remove("hidden");

                // Mostrar etiquetas y ocultar campos de edición
                labelTitulo.classList.remove("hidden");
                labelPais.classList.remove("hidden");
                labelEstado.classList.remove("hidden");
                labelMunicipio.classList.remove("hidden");
                labelCodigo_postal.classList.remove("hidden");
                labelCalle.classList.remove("hidden");
                labelColonia.classList.remove("hidden");
                labelNumero.classList.remove("hidden");
                labelTipo_inmueble.classList.remove("hidden");
                labelTipo_contrato.classList.remove("hidden");
                labelPrecio.classList.remove("hidden");
                labelArea.classList.remove("hidden");
                labelPisos.classList.remove("hidden");
                labelRecamaras.classList.remove("hidden");
                labelBanos.classList.remove("hidden");
                labelCocheras.classList.remove("hidden");
                labelJardin.classList.remove("hidden");
                labelJardin_area.classList.remove("hidden");
                labelPiscina.classList.remove("hidden");
                labelDescripcion.classList.remove("hidden");
                // ... Muestra y oculta las demás etiquetas y campos específicos de las propiedades ...

                inputTitulo.classList.add("hidden");
                inputPais.classList.add("hidden");
                inputEstado.classList.add("hidden");
                inputMunicipio.classList.add("hidden");
                inputCodigo_postal.classList.add("hidden");
                inputCalle.classList.add("hidden");
                inputColonia.classList.add("hidden");
                inputNumero.classList.add("hidden");
                inputTipo_inmueble.classList.add("hidden");
                inputTipo_contrato.classList.add("hidden");
                inputPrecio.classList.add("hidden");
                inputArea.classList.add("hidden");
                inputPisos.classList.add("hidden");
                inputRecamaras.classList.add("hidden");
                inputBanos.classList.add("hidden");
                inputCocheras.classList.add("hidden");
                inputJardin.classList.add("hidden");
                inputJardin_area.classList.add("hidden");
                inputPiscina.classList.add("hidden");
                inputDescripcion.classList.add("hidden");
                // ... Oculta y muestra los demás campos específicos de las propiedades ...
            } else if (botonClickeado.classList.contains("guardar")) {
                // Aquí puedes realizar operaciones de actualización en la base de datos utilizando AJAX o un formulario
                // Puedes enviar los datos al servidor para procesarlos y luego actualizar la interfaz

                // Ocultar guardar y cancelar, mostrar editar
                guardarBtn.classList.add("hidden");
                cancelarEditarBtn.classList.add("hidden");
                editarBtn.classList.remove("hidden");
                eliminarBtn.classList.remove("hidden");

                // Mostrar etiquetas y ocultar campos de edición
                labelTitulo.classList.remove("hidden");
                labelPais.classList.remove("hidden");
                labelEstado.classList.remove("hidden");
                labelMunicipio.classList.remove("hidden");
                labelCodigo_postal.classList.remove("hidden");
                labelCalle.classList.remove("hidden");
                labelColonia.classList.remove("hidden");
                labelNumero.classList.remove("hidden");
                labelTipo_inmueble.classList.remove("hidden");
                labelTipo_contrato.classList.remove("hidden");
                labelPrecio.classList.remove("hidden");
                labelArea.classList.remove("hidden");
                labelPisos.classList.remove("hidden");
                labelRecamaras.classList.remove("hidden");
                labelBanos.classList.remove("hidden");
                labelCocheras.classList.remove("hidden");
                labelJardin.classList.remove("hidden");
                labelJardin_area.classList.remove("hidden");
                labelPiscina.classList.remove("hidden");
                labelDescripcion.classList.remove("hidden");
                // ... Muestra y oculta las demás etiquetas y campos específicos de las propiedades ...

                inputTitulo.classList.add("hidden");
                inputPais.classList.add("hidden");
                inputEstado.classList.add("hidden");
                inputMunicipio.classList.add("hidden");
                inputCodigo_postal.classList.add("hidden");
                inputCalle.classList.add("hidden");
                inputColonia.classList.add("hidden");
                inputNumero.classList.add("hidden");
                inputTipo_inmueble.classList.add("hidden");
                inputTipo_contrato.classList.add("hidden");
                inputPrecio.classList.add("hidden");
                inputArea.classList.add("hidden");
                inputPisos.classList.add("hidden");
                inputRecamaras.classList.add("hidden");
                inputBanos.classList.add("hidden");
                inputCocheras.classList.add("hidden");
                inputJardin.classList.add("hidden");
                inputJardin_area.classList.add("hidden");
                inputPiscina.classList.add("hidden");
                inputDescripcion.classList.add("hidden");
                // ... Oculta y muestra los demás campos específicos de las propiedades ...
            } else if (botonClickeado.classList.contains("eliminar")) {
                // Ocultar eliminar y mostrar confirmar y cancelar
                eliminarBtn.classList.remove("hidden");
                editarBtn.classList.remove("hidden");
                confirmarEliminarBtn.classList.remove("hidden");
                cancelarEliminarBtn.classList.remove("hidden");
                
            } else if (botonClickeado.classList.contains("confirmarEliminar")) {
                // Realizar operaciones de eliminación y luego ocultar confirmar y cancelar, mostrar eliminar
                eliminarBtn.classList.remove("hidden");
                editarBtn.classList.remove("hidden");
                confirmarEliminarBtn.classList.remove("hidden");
                cancelarEliminarBtn.classList.remove("hidden");
                // Agregar código para eliminar el registro con el ID correspondiente (fila.dataset.id)
            }
            else if (botonClickeado.classList.contains("cancelarEliminar")) {
                // Ocultar guardar y cancelar, mostrar editar
                editarBtn.classList.remove("hidden");
                eliminarBtn.classList.remove("hidden");
                confirmarEliminarBtn.classList.remove("hidden");
                cancelarEliminarBtn.classList.remove("hidden");
            }
        });
    });
});