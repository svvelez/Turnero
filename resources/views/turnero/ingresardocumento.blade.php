<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/ingresardocumento.css">
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/6fe6c76279.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

{{--     <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}


</head>
<title>Turnero-ingresardocumento</title>

<body>
{{-- <div class="atras">
    <a class="botonatras" href="#">Atras</a>
</div> --}}

<div class="header">
    <a class="atras" href="#"><i class="fas fa-arrow-left"></i> Atras</a>
    <img class="imagen" src="logo.jpg" width="150px" height="80px">
    <a class="siguiente" href="#">Siguiente <i class="fas fa-arrow-right"></i> </a>
</div>

<div class="contenido">
    <h1>Ingrese su número de documento</h1>
    <input type="text" name="numerodocumento">
</div>

<div class="numeros1">
    <input class="btn btn-success" type="button" value="1">
    <input class="btn btn-success" type="button" value="2">
    <input class="btn btn-success" type="button" value="3">
<div class="numeros2">
    <input type="button" value="4">
    <input type="button" value="5">
    <input type="button" value="6">
</div>
<div class="numeros3">
    <input type="button" value="7">
    <input type="button" value="8">
    <input type="button" value="9">
</div>
<div class="numeros4">
    <input type="button" value="0">
</div>

<div class="generarturno">
    <button>Generar turno</button>
</div>


</body>


</html>
