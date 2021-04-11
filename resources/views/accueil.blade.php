<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css.css")}}">
    <title>Document</title>
</head>
<body style="background: url('images/imag1.png');background-size: cover">
    <div class="container-fluid ">
        <div class="row">
            <section class="col-md-2 d-flex flex-column justify-content-center  p-0" style="background-color:rgb(58, 34, 7)">

                <ul class="p-0  ">
                    <li class="list-unstyled text-light bg-dark text-center mt-5 "><a style="text-decoration: none" class="text-light pb-3 pt-3 h-100 w-100 d-block" href="">DASHBOARD</a></li>
                    <li class="list-unstyled text-light bg-dark text-center mt-5 "><a style="text-decoration: none" class="text-light pb-3 pt-3 h-100 w-100 d-block" href="{{(url('ajout'))}}">AJOUT DE LIVRES</a></li>
                    <li class="list-unstyled text-light bg-dark text-center mt-5 "><a style="text-decoration: none" class="text-light pb-3 pt-3 h-100 w-100 d-block" href=""> LISTES DES LIVRES</a></li>
                    <li class="list-unstyled text-light bg-dark text-center mt-5 "><a style="text-decoration: none" class="text-light pb-3 pt-3 h-100 w-100 d-block" href="{{(url('search'))}}"> RECHERCHER</a></li>
                </ul>

            </section>
            <section class="col-md-10  ">
                <div class="row p-3" style="background-color: rgba(187, 139, 37, 0.849)">
                    <h3 class="col-md-9  text-white">BIENVENU A LA BIBLIOTHEQUE LE SAVAN</h3>
                    <section class="col-md-3"><button class="btn btn-primary">DECONNEXION</button></section>
                </div>
                <section class="row justify-content-center">
                    <div class=" rond p-3 col-md-9  bg-white mt-5 mb-5">
                        <h3 class="text">Liste des livres</h3>
                        <table class="table table-responsive m-3">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Auteur</th>
                                    <th>Publication</th>
                                    <th>Type</th>
                                    <th>Pays</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($livres as $livre)
                                   <tr>
                                       <td>{{$livre->nom}}</td>
                                       <td>{{$livre->auteur}}</td>
                                       <td>{{$livre->parrution}}</td>
                                       <td>{{$livre->type}}</td>
                                       <td>{{$livre->pays}}</td>
                                       <th>
                                        <a class="btn btn-danger">Supprimer</a>
                                        <a class="btn btn-warning">modifier</a>
                                      </th>
                                   </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </section>
        </div>

    </div>
</body>
</html>
