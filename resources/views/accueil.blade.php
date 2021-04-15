@extends('socle',["lien"=>"images/bib7.jpg"])

@section("contenu")
<section class="row justify-content-center">
    <div class=" rond p-4 col-md-10  bg-white mt-5 mb-5">
        <h3 class="text">Liste des livres ajoutés</h3>
        <table class="table table-responsive m-5">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Auteur</th>
                    <th>année de Parution</th>
                    <th>Type</th>
                    <th>Pays</th>

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

                   </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
