function abrirImagen(event) {
    let ruta = event.target.src;


    let modal = new bootstrap.Modal(document.getElementById('modalImagen'));
    modal.show();
    // Tu código aquí
    document.getElementById("imagenModal").src = ruta;

}
document.addEventListener("click", function () {
    let audio = document.getElementById("bgMusic");
    audio.muted = false;
    audio.play();
}, { once: true });