function validaUsuario() {
            
    var usuario = document.getElementsByName('usuario').value;
    var expRegUs = /^[A-Za-z0-9]{5,11}$/;

    if (expRegUs.test(usuario)) {
      alert("Válido");  
    }else{
      alert("Usuario Inválido");  
      
    }
}

function validaContra() {
    
    var pass = document.getElementById('password').value;
    var expRegUs = /^(\w){9,11}$/;

    if (!expRegUs.test(pass)) {
        alert("Contraseña Inválida");
    }else{
        alert("Válido");
    }
}


























/*function validaUsuario(){

    const expRegUs = /^(\w){9,11}$/;

    if(!expRegUs.test(usuario)){
        return alert("Usuario Inválido");
    }
}*/
function validaUsuario() {
            
    var usuario = document.getElementsByName('usuario').value;
    var expRegUs = /[^A-Za-z0-9]{9,11}$/;

    if (!expRegUs.test(usuario)) {
        alert("Usuario Inválido");
    }else{
        alert("Válido");
    }
}

function validaPassword() {
            
    var contra = document.getElementsByName('password').value;
    var expRegUs = /^(\w){9,11}$/;

    if (!expRegUs.test(contra)) {
        alert("Contraseña Inválida");
    }else{
        alert("Válido");
    }
}
