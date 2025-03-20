<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Carta de San Valentín</title>
    <link rel="stylesheet" href="../style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <audio id="bgMusic" autoplay loop>
        <source src="../musica/los_angeles.mp3" type="audio/mpeg">
        Tu navegador no soporta audio.
    </audio>
    <?php include_once("header.html"); ?>

    <div class="section">


        <div class="valentines-day">
            <div class="envelope"></div>
            <div class="heart"></div>
            <div class="text"> PARA: <br> Caldos Magui </div>
            <div class="front"></div>
        </div>
        <div class="position-fixed d-flex justify-content-center align-items-center">

            <div id="card">
                <div class="side one"></div>
                <div class="side two">
                    <h2>Para mi amorcito</h2>
                    <p>Querida Magui... </p>
                    <p>Hoy quiero tomarme un momento para decirte algo que quizás ya sepas, pero que nunca está de más recordar: eres una mujer increíble. Tu fortaleza, tu independencia y tu determinación son inspiradoras.</p>
                    <p>No temes ir tras lo que quieres, luchas por tus sueños y enfrentas cada desafío con valentía. No necesitas que nadie te defina, porque tú misma has construido tu camino con esfuerzo y pasión.   </p>
                    <p> Tu resiliencia demuestra que no hay obstáculo que pueda detenerte, y tu esencia brilla con una luz propia que ilumina a quienes tienen la suerte de conocerte.</p>
                    <p>Un abrazo y un beso. Chupéx</p>
                </div>
            </div>
        </div>

    </div>
    <script src="../js/functions.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
<script>
    document.addEventListener("click", function() {
    let audio = document.getElementById("bgMusic");
    audio.muted = false;
    audio.play();
}, { once: true }); // Solo ejecuta esto una vez

    $(document).ready(function() {
        // Al cargar la página, ocultamos las cortinas
        $('.left-curtain').css('width', '0%');
        $('.right-curtain').css('width', '0%');

        $('.valentines-day').click(function() {
            // Animación de desvanecimiento de los elementos del sobre
            $('.envelope').css({
                'animation': 'fall 3s linear 1',
                '-webkit-animation': 'fall 3s linear 1'
            });
            $('.envelope').fadeOut(800, function() {
                // Ocultar elementos dentro de .valentines-day
                $('.valentines-day .heart, .valentines-day .text, .valentines-day .front').hide();


                // Hacer visible la carta con una animación ondulante
                $('#card').css({
                    'visibility': 'visible',
                    'opacity': 0,
                    'transform': 'scale(0.1)'
                });
                $('#card').animate({
                    'opacity': 1
                }, {
                    duration: 1000,
                    step: function(now, fx) {
                        var scale = 1 + Math.sin(now * Math.PI) * 0.1; // Calculamos la escala basada en la función seno
                        $(this).css('transform', 'scale(' + scale + ')');
                    }
                }); // Animación de ondulación
            });
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
    @import url('https://fonts.googleapis.com/css?family=Sacramento');

    #card {
        height: 500px;
        width: 800px;
        margin: 5em auto;
        /* position: fixed;
        top: -15px;
        left: 25%; */
        display: flex;
        visibility: hidden;
    }

    #card h2 {
        font-size: 3em;
        margin: 0;
        color: pink;
        text-align: center;
    }

    #card p {
        font-size: 0.9em;
        text-align: justify;
        padding-left: 30px;
        /* Espacio en blanco a la izquierda */
        padding-right: 30px;
        /* Espacio en blanco a la derecha */
    }


    .side {
        background: #eee;
        height: 550px;
        width: 400px;
        /*    border:1px solid red; */
        padding: 10px;
    }

    .side.one {
        width: 320px;
        transform: skew(10deg, 20deg);
        background: linear-gradient(90deg, #fff, #fff 40%, #ddd);
    }

    .side.two {
        transform: skew(10deg, -15deg);
        background: linear-gradient(-90deg, #fff, #fff 40%, #f0f0f0);
    }

    .section {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        font-family: 'Sacramento', cursive;
        background-color: #f1e3d3;
        overflow: hidden;
    }

    .valentines-day {
        position: relative;
        cursor: pointer;
    }

    .envelope {
        position: relative;
        filter: drop-shadow(0 0 25px rgba(0, 0, 0, .3));
    }

    .envelope:before {
        content: "";
        position: absolute;
        width: 254px;
        height: 254px;
        background-color: #ff9494;
        transform: rotate(-45deg);
        border-radius: 0 15px 0 0;
        left: -37px;
        top: -82px;
    }

    .envelope:after {
        content: "";
        position: absolute;
        background-color: #ff9494;
        width: 360px;
        height: 225px;
        left: -90px;
        top: 45px;
    }

    .heart {
        position: relative;
        background-color: #e01911;
        display: inline-block;
        height: 180px;
        top: 50px;
        left: 0;
        transform: rotate(-45deg);
        width: 180px;
        filter: drop-shadow(0 -10px 25px rgba(0, 0, 0, .3));
        transition: .5s;
    }

    .heart:before,
    .heart:after {
        content: "";
        background-color: #e01911;
        border-radius: 50%;
        height: 180px;
        width: 180px;
        position: absolute;
    }

    .heart:before {
        top: -100px;
        left: 0;
    }

    .heart:after {
        left: 100px;
        top: 0;
    }

    .front {
        position: absolute;
        width: 0;
        height: 0;
        border-right: 190px solid #fbd2d2;
        border-top: 113px solid transparent;
        border-bottom: 113px solid transparent;
        top: 44px;
        left: 80px;
        z-index: 4;
    }

    .front:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border-left: 190px solid #fbd2d2;
        border-top: 113px solid transparent;
        border-bottom: 113px solid transparent;
        top: -113px;
        left: -170px;
    }

    .front:after {
        width: 0;
        height: 0;
        position: absolute;
        content: "";
        border-bottom: 150px solid #fce7e9;
        border-right: 180px solid transparent;
        border-left: 180px solid transparent;
        top: -36px;
        left: -170px;
    }

    .text {
        position: absolute;
        font-family: arial;
        letter-spacing: 5px;
        text-align: center;
        color: white;
        z-index: 2;
        top: 80px;
        left: 15px;
        transition: .5s;
    }

    .valentines-day:hover .heart {
        transform: translateY(-50px) rotate(-45deg);
    }

    .valentines-day:hover .text {
        transform: translateY(-50px);
    }
</style>

</html>