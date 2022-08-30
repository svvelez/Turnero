<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/divisiones.css">
    <link rel="stylesheet" href="css/turnero.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link  href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <title>Turnero</title>
</head>
<body class="grid-container">

    <div class="header">
              <img class="imagen" src="logo.jpg" width="150px" height="80px">
    </div>

<div class="reloj">
    <div class="container">
    <h2  id="hora">00</h2>
    <h2 class="dot">:</h2>
    <h2 id="minuto">00</h2>
    <h2 class="dot">:</h2>
    <h2 id="segundo">00</h2>
    <span id="ampm">AM</span>
    </div>
</div>

<div class="contenido">
    <div class="video">
{{--         <iframe width="1000vw" height="750vh" src="https://www.youtube.com/embed/FN-apa8TKbQ?&autoplay=1&mute=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 --}}

        <video style="width:60vw;height:72vh;" autoplay playsinline muted loop controls>
       {{--  <source src="video.mp4" type="video/mp4"> --}}
        </video>
    </div>
    <div class="turnos">
        <table class="content-table" id="tabla">
             <thead>
            <tr> <th style="background: #429c6c;width:300px;height:50px;">Turno</th>
                 <th  style="background: #429c6c;width:300px;height:50px">Módulo</th>
          </tr>
         </thead>
           <tbody >
            <tr style="border-bottom: 1px solid #dddddd">
                 <td >AM 55</td>
                 <td>ADMISIÓN</td>
             </tr>
              </tbody>
             </table>
    </div>
</div>


    {{-- <nav class="navbar">NAVBAR</nav> --}}
    <aside class="sidebar"></aside>
    <article class="main"></article>

    <footer class="footer">
        <div>
            <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit.quasi temporibus. Neque, cum saepe.</h4>
        </div>
    </footer>



<script>
$(document).ready( function () {
    $('#tabla').DataTable();
} );
</script>
         <script src="js/turnero.js"></script>
</body>
</html>


{{-- <p class="dia" id="dia"></p>
<p class="mes" id="mes"></p>
<div class="hora" id="hora">
     <p>00</p>
     <p>:</p>
     <p>00</p>
     <p>:</p>
     <p>00</p>
 </div> --}}
