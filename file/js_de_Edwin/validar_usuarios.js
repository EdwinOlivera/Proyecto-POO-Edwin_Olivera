
const form = document.getElementById('RegistroUsuarioNormal'); // Obtenemos la referencia al formulario
if (form) { // Si existe nuestro elemento en memoria este se quedara escuchando al evento submit del formulario
    console.log("Se esta escuchando al formulario")

    form.addEventListener('submit',
        ValidarUsuarioNormal); // Al momento de enviar el formulario, ejecuta la función "contactform"
}

function ValidarUsuarioNormal() {
    var Generos = document.getElementsByName('genero');
    for (i = 0; i < Generos.length; i++) {
        if (Generos[i].checked) {
            //var genero = Generos[i].checked;
            var generoSeleccionado = Generos[i].value;
            alert(generoSeleccionado);
        }

    var tipoTajeta = document.getElementsByName('tipoTarjeta');
    for (i = 0; i < tipoTajeta.length; i++) {
        if (tipoTajeta[i].checked) {
            //var genero = tipoTajeta[i].checked;
            var tipoTajetaSeleccionado = tipoTajeta[i].value;
            alert(tipoTajetaSeleccionado);
        }
            let UsuarioNuevo = {

                nombre          = document.getElementByI('nombre').value, // Obtenemos la referencia a cada uno de nuestros elementos del formulario
                apellido        = document.getElementByI('apellido').value,
                password        = document.getElementByI('password').value,
                correo          = document.getElementByI('correo').value,
                passwordRepeta  = document.getElementByI('passwordRepeat').value,
                edad            = document.getElementByI('edad').value,
                genero          = generoSeleccionado,
                departamento    = document.getElementByI('departamento').value,
                municipio       = document.getElementByI('municipio').value,
                tipoTarjeta     = tipoTajetaSeleccionado,
                numTarjeta      = document.getElementByI('numTarjeta').value,
                PIN             = document.getElementByI('PIN').value,
                metodoDePago    = document.getElementByI('metodoDePago').value,
                aceptarTerminos = document.getElementByI('aceptarTerminos').value
            };
            for (let index = 0; index < UsuarioNuevo.length; index++) {
                console.log(UsuarioNuevo[index]);


            }



        }