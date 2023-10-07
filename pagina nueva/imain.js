const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click", ()=>{
    nav.classList.add("visible");
})

cerrar.addEventListener("click", ()=>{
    nav.classList.remove("visible");
})


document.getElementById("boton_prueba").onclick = function (){
    location.href = "prueba.html"
}

document.getElementById("boton_prueba1").onclick = function (){
    location.href = "prueba.html"
}

document.getElementById("boton_prueba2").onclick = function (){
    location.href = "prueba.html"
}

document.getElementById("pagina").onclick = function (){
    location.href = "prueba.html"
}


document.getElementById("pagina1").onclick = function (){
    location.href = "prueba.html"
}

document.getElementById("facebook").onclick = function(){
    location.href = "https://www.facebook.com/parquelasirenita/"
}

document.getElementById("insta").onclick = function(){
    location.href = "https://www.instagram.com/parquelasirenita/"
}
