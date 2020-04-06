
var localStorage = window.localStorage;
var UsuariosNormales;
var IndexUsuario = 0;
if (localStorage.getItem("usuariosNormales") == null) {
    ///-----------------------------------------------USUARIOS

    let usuarios = [
    ];

    localStorage.setItem("usuariosNormales", JSON.stringify(usuarios));

} else {
    UsuariosNormales = JSON.parse(localStorage.getItem('usuariosNormales'));
}



//#region Seccion de seleccion de metodo de pago

var MetodoRepetido = false;
var metodoSeleccionado;
var MetodosDePagos = [
    {

    }
];

[].forEach.call(document.querySelectorAll("[name=metodoDePago]"), function (checkbox) {
    checkbox.addEventListener("click", function () {
        if (this.checked) {
            metodoSeleccionado = this.value.toLowerCase();
            let metodoActula = {
                metodo: metodoSeleccionado,
            };
            for (let index = 0; index < MetodosDePagos.length; index++) {
                
                if(MetodosDePagos[index].metodo == metodoSeleccionado ){
                    MetodoRepetido = true;
                }
                
            }
            
            if(!MetodoRepetido){
                MetodosDePagos.push(metodoActula);
                
            }
            MetodoRepetido = false;
        }else{
            for (let index = 0; index < MetodosDePagos.length; index++) {
                
                if(MetodosDePagos[index].metodo == metodoSeleccionado ){
                    removeItemFromArr(MetodosDePagos,MetodosDePagos[index])
                }
                
            }
        }
    }, false);
});
//Funcion para remover un objeto de un arreglo
var removeItemFromArr = ( arr, item ) => {
    var i = arr.indexOf( item );
    i !== -1 && arr.splice( i, 1 );
};

//#endregion

function ValidarUsuarioNormal() {


    var Generos = document.getElementsByName('genero');
    for (i = 0; i < Generos.length; i++) {
        if (Generos[i].checked) {
            var generoSeleccionado = Generos[i].value;
        }
    }

    var tipoTajeta = document.getElementsByName('tipoTarjeta');
    for (i = 0; i < tipoTajeta.length; i++) {
        if (tipoTajeta[i].checked) {
            var tipoTajetaSeleccionado = tipoTajeta[i].value;
        }
    }


    const nombreRecopilado = document.getElementById('nombre').value; // Obtenemos la referencia a cada uno de nuestros elementos del formulario
    const apellidoRecopilado = document.getElementById('apellido').value;
    const ContraseñaRecopilado = document.getElementById('Contraseña').value;
    const correoRecopilado = document.getElementById('correo').value;
    const ContraseñaRepetaRecopilado = document.getElementById('ContraseñaRepeat').value;
    const edadRecopilado = document.getElementById('edad').value;
    const selectDepartamentosRecopilado = document.getElementById('selectDepartamentos').value;
    const selectMunicipioRecopilado = document.getElementById('selectMunicipio').value;
    const tarejetaDigitoRecopilado = document.getElementById('tarejetaDigito').value;
    const pinTarjetaRecopilado = document.getElementById('pinTarjeta').value;
    const aceptarTerminosRecopilado = document.getElementById('aceptarTerminos').value;
    const generoRecopilado = generoSeleccionado;//On
    const tipoTarjetaRecopilado = tipoTajetaSeleccionado;//ON
    const metodoDePagoRecopilado = MetodosDePagos;
    //Esta es la seccion donde se comprueba cuales son los campos que estan vacios
    if (
        nombreRecopilado != ""
        && apellidoRecopilado != ""
        && ContraseñaRecopilado != ""
        && correoRecopilado != ""
        && ContraseñaRepetaRecopilado != ""
        && edadRecopilado != ""
        && selectDepartamentosRecopilado != ""
        && selectMunicipioRecopilado != ""
        && tarejetaDigitoRecopilado != ""
        && pinTarjetaRecopilado != ""
        && aceptarTerminosRecopilado != ""
        && generoRecopilado == "on"
        && tipoTarjetaRecopilado == "on"
        && metodoDePagoRecopilado == "on") {
        let UsuarioNuevo = {
            nombre: nombreRecopilado, // Obtenemos la referencia a cada uno de nuestros elementos del formulario
            apellido: apellidoRecopilado,
            Contraseña: ContraseñaRecopilado,
            correo: correoRecopilado,
            ContraseñaRepeta: ContraseñaRepetaRecopilado,
            edad: edadRecopilado,
            selectDepartamentos: selectDepartamentosRecopilado,
            selectMunicipio: selectMunicipioRecopilado,
            tarejetaDigito: tarejetaDigitoRecopilado,
            pinTarjeta: pinTarjetaRecopilado,
            aceptarTerminos: aceptarTerminosRecopilado,
            tipoTarjeta: tipoTarjetaRecopilado,//ON
            genero: generoRecopilado,//On
            metodoDePago: metodoDePagoRecopilado,
        };

        UsuariosNormales.push(UsuarioNuevo);
        console.log("Se agrego mas datos")
        localStorage.setItem("usuariosNormales", JSON.stringify(UsuariosNormales));
    } else {
        console.log("Hay un campo vacio")
    }
}