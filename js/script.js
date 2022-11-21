
document.getElementById("btn_iniciarsesion").addEventListener("click", IniciarSesion);
document.getElementById("btn_registrar").addEventListener("click", registro);
window.addEventListener("resize", anchoPag);

var contenedor_registro = document.querySelector(".contenedor_registro");
var formulario_login = document.querySelector(".formulario_login");
var formulario_registro = document.querySelector(".formulario_registro");
var caja_login = document.querySelector(".caja_login");
var caja_registro = document.querySelector(".caja_registro");

function anchoPag(){
    if(window.innerWidth > 850){
        caja_login.style.display = "block";
        caja_registro.style.display = "block";
    }else{
        caja_registro.style.display = "block";
        caja_registro.style.opacity = "1";
        caja_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registro.style.display = "none";
        contenedor_registro.style.left = "0px";
    }
}

anchoPag();

function IniciarSesion(){
    if(window.innerWidth > 850){
formulario_registro.style.display = "none";
contenedor_registro.style.left = "10px";
formulario_login.style.display = "block";
caja_registro.style.opacity = "1";
caja_login.style.opacity = "0";
}else{
formulario_registro.style.display = "none";
contenedor_registro.style.left = "0px";
formulario_login.style.display = "block";
caja_registro.style.display = "block";
caja_login.style.display = "none";
    }
}

function registro(){
    if(window.innerWidth>850){
    formulario_registro.style.display = "block";
    contenedor_registro.style.left = "410px";
    formulario_login.style.display = "none";
    caja_registro.style.opacity = "0";
    caja_login.style.opacity = "1";  
}else{
    formulario_registro.style.display = "block";
    contenedor_registro.style.left = "0px";
    formulario_login.style.display = "none";
    caja_registro.style.display = "none";
    caja_login.style.display = "block";
    caja_login.style.opacity = "1"; 
        }
    }