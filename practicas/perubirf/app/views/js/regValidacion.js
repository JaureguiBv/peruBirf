document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registroForm');
    if (form) {
        form.addEventListener('submit', function (event) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const userType = document.getElementById('userType').value;
            const validDomain = /@perubirf\.edu\.pe$/;

            // Validación del correo electrónico
            if (!validDomain.test(email)) {
                event.preventDefault(); // Evita que el formulario se envíe
                Swal.fire({
                    icon: 'error',
                    title: 'Correo inválido',
                    text: 'El correo debe pertenecer al dominio @perubirf.edu.pe.',
                    confirmButtonColor: '#3085d6',
                });
                return;
            }

            // Validación de campos vacíos
            if (!email || !password || !userType) {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Campos incompletos',
                    text: 'Por favor complete todos los campos.',
                    confirmButtonColor: '#3085d6',
                });
                return;
            }

            // Validación de la contraseña
            if (password.length < 6) {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Contraseña inválida',
                    text: 'La contraseña debe tener al menos 6 caracteres.',
                    confirmButtonColor: '#3085d6',
                });
                return;
            }
        });
    }
});
