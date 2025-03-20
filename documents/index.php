<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magui</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/4579e115cf.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="contawesome/all.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <audio id="bgMusic" autoplay>
        <source src="../musica/hb.mp3" type="audio/mpeg">
        Tu navegador no soporta audio.
    </audio>

    <!-- <iframe src="../song.html" style="display: none;"></iframe> -->
    <?php include_once("header.html"); ?>

    <div class="container">

        <div class="bgoverlay">
            <div class="container">
                <span class="ico">
                    <span class="ico2"></span>
                    <span class="title">Magui</span>
                </span>
                <div class="endtext">
                    <span class="close" title="Close"><i class="fa fa-times"></i></span>
                         <h1>Feliz Cumpleaños Caldos Magui</h1>
                    <h2>~</h2>
                    <h3>De tu Novio Jhonatan</h3>
                </div>
            </div>
        </div>
    </div>
    <footer>

    </footer>

    <script src="../js/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".title").addEventListener("click", function() {
            document.querySelector(".container").classList.add("open");
        });

        document.querySelector(".close").addEventListener("click", function() {
            document.querySelector(".container").classList.remove("open");
        });
    });
</script>
<style>
    body {
        position: relative;
        margin: 0;
        padding: 0;
    }

    body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('../imagenes/fondo.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        opacity: 0.8;
        z-index: -1;
    }

    /* @import url(font:400 95px/1em Amatic SC;text-align:center;padding-top:140px); */

    body {
        background: url(https://subtlepatterns.com/patterns/noise_lines.png);
        font-family: 'Amatic SC', cursive;
        overflow: hidden;
        color: #fff;
    }

    .bgoverlay {
        background: #fff;
        background: #fff;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .container {
        position: relative;
        margin: 220px auto 0 auto;
        width: 320px;
    }


    .ico {
        display: block;
        width: 320px;
        height: 320px;
    }

    .open .ico {
        animation: open 4s;
        transform: scale(10);
    }

    .ico .title {
        position: absolute;
        top: 70%;
        left: 50%;
        margin-left: -95px;
        margin-top: -73px;
        z-index: 4;
        font-size: 70px;
        font-family: 'Amatic SC', cursive;
        color: #fff;
        cursor: pointer;
        text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
    }

    .open .ico .title {
        opacity: 0;
        transition: all 0.3s ease;
        top: -100px;
    }

    .ico:before,
    .ico:after,
    .ico2:before,
    .ico2:after {
        position: absolute;
        top: 0;
        left: 0;
    }

    .ico:before,
    .ico:after,
    .ico2:before,
    .ico2:after {
        display: block;
        font-size: 20em;
        color: #000;
        content: "\f004";
        font-family: FontAwesome;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .ico2:before,
    .ico2:after {
        color: #000;
    }

    .ico:before {
        z-index: 3;
    }

    .ico:after {
        animation: explode 4s infinite;
    }


    .ico2:before {
        animation: explodeSmall 3s infinite;
    }

    .ico2:after {
        animation: explodeSmall 2s infinite;
    }


    .endtext {
        opacity: 0;
        position: absolute;
        top: -100px;
        width: 100%;
    }

    .open .endtext {
        top: 0;
        opacity: 1;
        animation: show 5s;
    }

    .endtext .close {
        position: absolute;
        top: 0;
        right: 0;
        cursor: pointer;
        text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
    }

    .endtext h1,
    .endtext h2,
    .endtext h3 {
        text-shadow: 2px 4px 3px rgba(0, 0, 0, 0.3);
        text-align: center;
        font-weight: normal;
    }

    .endtext h1 {
        font-size: 50px;
    }

    .endtext h2 {
        font-size: 30px;
    }

    .endtext h3 {
        font-size: 20px;
    }


    @keyframes explode {
        from {
            transform: scale(1);
            opacity: 1;
        }

        to {
            transform: scale(1.6);
            opacity: 0;
        }
    }

    @keyframes explodeSmall {
        from {
            transform: scale(1);
            opacity: 1;
        }

        to {
            transform: scale(1.2);
            opacity: 0;
        }
    }


    @keyframes open {
        from {
            transform: scale(1);
        }

        to {
            transform: scale(10);
        }
    }

    @keyframes show {
        from {
            opacity: 0;
            top: -100px;
        }

        to {
            opacity: 1;
            top: 0;
        }
    }
</style>

</html>