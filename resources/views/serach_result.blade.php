@extends("socle",["lien"=>"images/imag1.png"])
@section("contenu")
<div class="container-fluid">
    <h1 class="text-center text-white" >{{$count}} Livre(s)</h1>
</div>


<div id="form-main" >


        <table class="table table-light">
            <thead>
                <tr>

                    <th>Auteur</th>
                    <th>Publication</th>
                    <th>Type</th>
                    <th>Pays</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($search as $search)
                   <tr>

                       <td>{{$search->auteur}}</td>
                       <td>{{$search->parrution}}</td>
                       <td>{{$search->type}}</td>
                       <td>{{$search->pays}}</td>
                   </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection

