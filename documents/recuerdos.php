<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuerdos</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/4579e115cf.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="contawesome/all.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-image: url('../imagenes/toptal.webp');">
    <!-- <iframe src="../song.html" style="display: none;"></iframe> -->
    <audio id="bgMusic" autoplay loop>
        <source src="../musica/nostalgic.mp3" type="audio/mpeg">
        Tu navegador no soporta audio.
    </audio>
    <?php include_once("header.html"); ?>
    <div class="container" id="recuerdos">
        <div class="row">
            <div class="col-4"> <img src="../imagenes/imagen1.jpeg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/imagen2.jpeg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/imagen3.jpeg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/imagen4.jpeg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/imagen5.jpeg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/imagen6.jpeg" onclick="abrirImagen(event)"></div>


            <div class="col-4"> <img src="../imagenes/recuerdos/recuerdo1.jpg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/recuerdos/recuerdo2.jpg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/recuerdos/recuerdo3.jpg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/recuerdos/recuerdo4.jpg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/recuerdos/recuerdo6.jpg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/recuerdos/recuerdo.jpg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/recuerdos/recuerdo8.jpg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/recuerdos/recuerdo9.jpg" onclick="abrirImagen(event)"></div>
            <div class="col-4"> <img src="../imagenes/recuerdos/flor_muerta.jpeg" onclick="abrirImagen(event)"></div>




        </div>

        <div class="row">

            <div class="col-6">
                <video src="../videos/video1.mp4" controls width="320" height="240">
                    Tu navegador no admite el elemento <code>video</code>.
                </video>
            </div>
            <div class="col-6">
                <video src="../videos/video2.mp4" controls width="320" height="240">
                    Tu navegador no admite el elemento <code>video</code>.
                </video>
            </div>
        </div>

    </div>
    <div class="modal fade" id="modalImagen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content" style="background-image: url('../imagenes/flores.webp');">
                <div class="modal-body text-center">
                    <img id="imagenModal" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="../js/functions.js"></script>

</body>

</script>
<style>
    .col-4 {
        /* border: 1px dashed black; */
        padding: 8px;
    }

    #imagenModal {
        border: 1px solid red;
    }

    .row {
        text-align: center;
    }

    .row img {
        object-fit: cover;
        width: 80%;
        height: 400px;
        border-radius: 12px;
        border: 1px solid red
    }

    .row img:hover {
        cursor: grab;
    }
</style>

</html>