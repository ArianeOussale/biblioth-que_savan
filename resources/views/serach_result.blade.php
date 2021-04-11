
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
<body>

</body>
</html>
<div class="container-fluid">
    <h1 class="text-center text-white" >{{$count}} Resultats</h1>
</div>


<div id="form-main" >


        <table class="table table-light">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Auteur</th>
                    <th>Publication</th>
                    <th>Type</th>
                    <th>Pays</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($search as $search)
                   <tr>
                       <td>{{$search->nom}}</td>
                       <td>{{$search->auteur}}</td>
                       <td>{{$search->parrution}}</td>
                       <td>{{$search->type}}</td>
                       <td>{{$search->pays}}</td>
                   </tr>
                @endforeach
            </tbody>
        </table>
</div>
