<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/principal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/6fe6c76279.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

{{--     <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}


</head>
<title>Turnero-documento</title>

<body>

<div class="header">
    <a class="atras" href="{{route('turnero.index')}}"><i class="fas fa-arrow-left"></i> Atras</a>
    <img class="imagen" src="logo.jpg" width="150px" height="80px">
    <a class="siguiente" href="#">Inicio <i class="fas fa-solid fa-house"></i> </a>
</div>

<div class="contenido">
    <div class="row">
        {{--  card atención general --}}
         <div class="col-sm-6">
           <div class="card1">
             <div class="card-body input-group">

                <h2>*ATENCIÓN GENERAL</h2>
                <a href="{{route('general')}}" class="btn btn-success" ><i class="fas fa-solid fa-chevron-right"></i></a>
                </div>
           </div>
         </div>

         {{-- card preferencial --}}
         <div class="col-sm-6">
           <div class="card2">
             <div class="card-body">
                <h2>*PREFERENCIAL</h2>
                <p>(Embarazadas, Mayores , Discap)</p>
                <a href="{{route('general')}}" class="btn btn-success"><i class="fas fa-solid fa-chevron-right"></i></a>
                </div>
           </div>
         </div>

    </div>


</div>


</div>

</body>
</html>
