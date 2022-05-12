var expRegTel =/^[0-9]{10}$/;

function validaDatosPro(){
    var verificar=true;

 
     if(!document.formulario.nombre_proveedor.value){
        alert("Falta el nombre");
        document.formulario.nombre_proveedor.focus();
        verificar = false;

    }else if(!expRegTel.test(document.formulario.telefono.value)){
        alert("Inserta diez digitos");
        document.formulario.telefono.focus();
        verificar = false;
    }

    if(verificar){
        document.formulario.submit();
    }
}

window.onload= function(){
    document.getElementById('enviar').onclick=validaDatosPro;
}