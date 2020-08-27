(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Seleccionar el formulario para validar
        var forms = document.getElementsByClassName('needs-validation');
        // Validar cada campo y prevenir que se envie
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {

                event.preventDefault();
                if (form.checkValidity() === false) {
                    event.stopPropagation();
                } else {

                    var nombre = document.getElementById('nombre').value;
                    var email = document.getElementById('email').value;
                    var mensaje = document.getElementById('mensaje').value;


                    var xhr = new XMLHttpRequest();

                    xhr.open('POST', 'includes/enviar.php', true);
                    
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                    xhr.onload = function () {
                        if (this.status === 200) {
                            var respuesta = JSON.parse(xhr.responseText);
                            if(respuesta.respuesta == false ){ //configurar correo
                                var div =document.createElement('div');
                                div.appendChild(document.createTextNode('Se envio correctamente'));
                                div.classList.add('alert', 'alert-success', 'mt-4', 'text-center');
                                document.querySelector('form').appendChild(div);
                                setTimeout(function (){
                                    document.querySelector('.alert').remove();
                                },3000);
                                
                            }
                        }
                    };

                    xhr.send('nombre='+nombre+'&email='+email+'&mensaje='+mensaje);

                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
