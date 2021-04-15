<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="boots/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("css.css")}}">
    <title>biblio_savan</title>
</head>
<body style="background: url({{$lien ?? ''}});background-size: cover" class="h-100">
    <div class="container-fluid h-100 ">
        <div class="row h-100">
            <section class="col-md-2 d-flex flex-column justify-content-center h-100  p-0" style="background-color:rgba(221, 163, 37, 0.849)">

                <ul class="p-0  ">
                    <li class="list-unstyled text-light bg-dark text-center mt-5 "><a style="text-decoration: none" class="text-light pb-4 pt-4 h-100 w-100 d-block" href=" src= images/bib14">DASHBOARD</a></li>
                    <li class="list-unstyled text-light bg-dark text-center mt-5 "><a style="text-decoration: none" class="text-light pb-4 pt-4 h-100 w-100 d-block" href="{{(url('ajout'))}}">AJOUT DE LIVRES</a></li>
                    <li class="list-unstyled text-light bg-dark text-center mt-5 "><a style="text-decoration: none" class="text-light pb-4 pt-4 h-100 w-100 d-block" href="{{(url('search'))}}">RECHERCHER</a></li>


                </ul>

            </section>
            <section class="col-md-10  ">
                <div class="row p-3 " style="background-color: rgba(221, 163, 37, 0.849) ">
                 <h3 class="col-md-9  text-white">Bienvenu à SAVAN,le tremplein du savoir</h3>
                <section class="col-md-3"><a href="{{url('/deconnexion')}}"   class="btn btn-dark">DECONNEXION</a></section>
                </div>
                @yield('contenu')
            </section>
        </div>

    </div>
    <script src="jquery-3.5.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="boots/js/bootstrap.min.js"></script>
    <script src="boots/js/bootstrap.bundle.min.js"></script>
</body>
</html>
