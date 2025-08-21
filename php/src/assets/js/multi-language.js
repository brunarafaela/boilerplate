function openSeletorIdioma(){
    var x = document.getElementById("painelSeletorIdioma");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("iconSeletorIdioma").textContent = "-";
    } else {
        x.style.display = "none";
        document.getElementById("iconSeletorIdioma").textContent = "+";
    }
}

function closeSeletorIdioma(){
    var x = document.getElementById("painelSeletorIdioma");
    if (x.style.display === "block") {
        x.style.display = "none";
        document.getElementById("iconSeletorIdioma").textContent = "+";
    } else {
        x.style.display = "block";
        document.getElementById("iconSeletorIdioma").textContent = "-";
    }
}

function setEnglish() {
    console.log("Idioma definido: Ingles");
    document.getElementById("show-img-flag").src = 'assets/images/icones/eng-flag.png';
    document.getElementById('seletor-img-flag-en').style.filter = "grayscale(1)";
    document.getElementById('seletor-img-flag-ptbr').style.filter = "grayscale(0)";
    closeSeletorIdioma();
    var elems = document.body.getElementsByTagName("*");
    for (item of elems) {
        if (item.getAttribute("data-en") != null) {
            item.innerHTML = item.getAttribute("data-en");
        }
    }
}

function setPortuguese() {
    console.log("Idioma definido: Portugues");
    document.getElementById("show-img-flag").src = 'assets/images/icones/ptbr-flag.png';
    document.getElementById('seletor-img-flag-ptbr').style.filter = "grayscale(1)";
    document.getElementById('seletor-img-flag-en').style.filter = "grayscale(0)";
    closeSeletorIdioma();
    var elems = document.body.getElementsByTagName("*");
    for (item of elems) {
        if (item.getAttribute("data-ptbr") != null) {
            item.innerHTML = item.getAttribute("data-ptbr");
        }
    }
}