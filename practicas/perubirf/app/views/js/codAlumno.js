function buscarAlumno() {
    // Obtener el valor del DNI ingresado
    var aluDni = document.getElementById("aluDni").value;

    // Verificar que el valor no esté vacío
    if (aluDni.length > 0) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "buscarAlumno.php?aluDni=" + aluDni, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Cuando se recibe la respuesta, actualizar el campo nombreAlumno
                var respuesta = JSON.parse(xhr.responseText);
                if (respuesta.exito) {
                    document.getElementById("nombreAlumno").value = respuesta.nombre;
                } else {
                    document.getElementById("nombreAlumno").value = "Alumno no encontrado";
                }
            }
        };
        xhr.send();
    } else {
        // Si el campo está vacío, limpiar el nombre del alumno
        document.getElementById("nombreAlumno").value = "";
    }
}
