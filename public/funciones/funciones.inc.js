function mostrarApartado(sectionActual, sectionNuevo) {
    const cambioAntiguo = document.querySelector(`#${sectionActual}`);
    const cambioNuevo = document.querySelector(`#${sectionNuevo}`);

    cambioAntiguo.style.display = "none";
    cambioNuevo.style.display = "block";
}