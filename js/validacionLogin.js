var expUser = /^[A-Za-z0-9]+$/;
var expRegCon = /^(\w){9,11}$/;

function validacion(){
    var verificar=true;

    if(!expUser.test(document.formulario.usuario.value)){
        alert("Es incorrencto el formato del usuario");
        document.formulario.usuario.focus();
        verificar = false;
    }else if(!expRegCon.test(document.formulario.password.value)){
        alert("Longitud de la contraseña inválida");
        document.formulario.password.focus();
        verificar = false;
    }


    if(verificar){
        document.formulario.submit();
    }
}

window.onload= function(){
    document.formulario.enviar.onclick=validacion;
}