document.addEventListener("DOMContentLoaded", function(){

    var checkLlamado = document.querySelectorAll('.checkLlamado');
    var checkContestado = document.querySelectorAll('.checkContestado');
    var checkInteresado = document.querySelectorAll('.checkInteresado');

    // Adjuntar el evento onchange a cada checkbox
    checkLlamado.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var estado = this.checked ? 1 : 0; // 1 si está marcado, 0 si no está marcado
            var id = this.getAttribute('data-id'); // Obtener el ID del atributo data-id

            // Enviar el estado y el ID al servidor usando AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'estatusLlamado.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('id=' + id + '&estado=' + estado);

            // Manejar la respuesta del servidor si es necesario
            xhr.onload = function() {
                if (xhr.status == 200) {
                    console.log(xhr.responseText); // Puedes manejar la respuesta aquí
                }
            };
        });
    });
    // Adjuntar el evento onchange a cada checkbox
    checkContestado.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var estado = this.checked ? 1 : 0; // 1 si está marcado, 0 si no está marcado
            var id = this.getAttribute('data-id'); // Obtener el ID del atributo data-id

            // Enviar el estado y el ID al servidor usando AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'estatusContestado.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('id=' + id + '&estado=' + estado);

            // Manejar la respuesta del servidor si es necesario
            xhr.onload = function() {
                if (xhr.status == 200) {
                    console.log(xhr.responseText); // Puedes manejar la respuesta aquí
                }
            };
        });
    });
    // Adjuntar el evento onchange a cada checkbox
    checkInteresado.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var estado = this.checked ? 1 : 0; // 1 si está marcado, 0 si no está marcado
            var id = this.getAttribute('data-id'); // Obtener el ID del atributo data-id

            // Enviar el estado y el ID al servidor usando AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'estatusInteresado.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('id=' + id + '&estado=' + estado);

            // Manejar la respuesta del servidor si es necesario
            xhr.onload = function() {
                if (xhr.status == 200) {
                    console.log(xhr.responseText); // Puedes manejar la respuesta aquí
                }
            };
        });
    });
});