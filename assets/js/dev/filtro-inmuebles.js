function filtrar() {
    var tipo = document.getElementById("Tipo").value;
    var inmueble = document.getElementById("Inmueble").value;

    var elementos = document.querySelectorAll(".propiedades .inmueble");
    var encontrados = false;

    elementos.forEach(function (elemento) {
        var clases = elemento.className.split(" ");
        if ((tipo === "" || clases.includes(tipo)) && (inmueble === "" || clases.includes(inmueble))) {
            elemento.style.display = "block";
            encontrados = true;
        } else {
            elemento.style.display = "none";
        }
    });

    if (!encontrados) {
        document.getElementById("mensaje").style.display = "block";
    } else {
        document.getElementById("mensaje").style.display = "none";
    }
}
