
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
    <h1 class="text-center text-white" >BIBLIOTHEQUE SAVAN</h1>
</div>


<div id="form-main" >

    <div id="form-div">
      <form class="form" action="{{url('search')}}" method="POST"  id="form1">
        @csrf

        <p class="name">
            <select name="filtre"class="validate[required,custom[type de livre]] feedback-input" id="type de livre" placeholder="type de livre" id="">
                <option value="type">Par Type</option>
                <option value="pays">Par pays</option>
                <option value="auteur">Par auteur</option>
                <option value="parrution">Par date de publication</option>
            </select>
        </p>
        <p class="name">
            <select name="type"class="validate[required,custom[type de livre]] feedback-input" id="type de livre" placeholder="type de livre" id="">
                <option value="Romantique">Romantique</option>
                <option value="Poétique">Poétique</option>
            </select>
          </p>
          <p class="name">
            <select name="pays"class="validate[required,custom[type de livre]] feedback-input" id="type de livre" placeholder="type de livre" id="">
                <option value="Burkina Faso">Burkina</option>
                <option value="France">France</option>
            </select>
          </p>
        <p class="password">
            <input name="auteur" type="text" class="validate[required,custom[email]] feedback-input" id="confirm password" placeholder="Auteur" />
        </p>
        <p class="password">
            <input name="publication" type="date" class="validate[required,custom[email]] feedback-input" id="confirm password" placeholder="" />
        </p>
        <div class="submit">
          <input type="submit" value="rechercher" id="button-blue"/>
          <div class="ease"></div>
        </div>
        <section class="col-md-3"><button class="btn btn-dark">Retour</button></section>
      </form>



    </div>
