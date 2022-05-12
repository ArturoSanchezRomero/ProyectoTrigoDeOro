var entero = /^[0-9]+$/;
var flotante = /^-?(?:\d+(?:.\d*)?)$/;

function validaDatos(){
    var verificar=true;

    if(!document.formulario.nombre_mp.value){
        alert("Falta el nombre");
        document.formulario.nombre_mp.focus();
        verificar = false;
    }else if(!document.formulario.fecha_compra.value){
        alert("Falta la fecha de compra");
        document.formulario.fecha_compra.focus();
        verificar = false;
    }else if(!entero.test(document.formulario.cantidad.value)){
        alert("Inserta un número entero");
        document.formulario.cantidad.focus();
        verificar = false;
    }else if(!document.formulario.caducidad.value){
        alert("Error en la fecha de caducidad");
        document.formulario.caducidad.focus();
        verificar = false;
    }else if(!flotante.test(document.formulario.costo.value)){
        alert("Inserta un número válido");
        document.formulario.costo.focus();
        verificar = false;
    }
    
    if(document.formulario.fecha_compra.value && document.formulario.caducidad.value){
        var compra = new Date(document.formulario.fecha_compra.value);
        var cadu = new Date(document.formulario.caducidad.value);

        if(cadu < compra){
            alert("La fecha de caducidad debe ser mayor a la fecha de compra");
            document.formulario.fecha_compra.focus();
           verificar = false;
        }
    }


    if(verificar){
        document.formulario.submit();
    }
}


window.onload= function(){
    document.getElementById('enviar').onclick=validaDatos;
   
}


