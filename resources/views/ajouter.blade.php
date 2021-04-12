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
    <div class="container-fluid">
        <h1 class="text-center text-white" >BIBLIOTHEQUE SAVAN</h1>
    </div>


    <div id="form-main" >

        <div id="form-div">
          <form class="form" action="{{route('ajout')}}" method="POST"  id="form1">
            @csrf
            <div class="form-group"> </div>
            <label class="text-white"  for="">Nom :</label>
            <p class="name">
              <input name="nom" type="nom du livre" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="nom du livre" id="name" />
            </p>
            <div class="form-group">
                <label class="text-white" for="">Publication :</label>
                <p class="name">
                    <input name="parution" type="date" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="date" id="date" />
                  </p>
            </div>
              <div class="form-group">
                  <label class="text-white"  for="">Auteur :</label>
                <p class="name">
                    <input name="auteur" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="auteur" id="name" />
                  </p>
            </div>

               <div class="form-group">
                   <label class="text-white"  for="">Type de livre:</label>
                <p class="name">

                    <select name="type"class="validate[required,custom[type de livre]] feedback-input" id="type de livre" placeholder="type de livre" id="">
                        <option value="Romantique">romantique</option>
                        <option value="Poétique">poétique</option>
                        <option value="théatral">théatral</option>
                        <option value=">philosophique">philosophique</option>
                        <option value="naratif">naratif</option>
                        <option value="livre pour enfant">livre pour enfant</option>

                        </select>
                  </p>
               </div>
               <div class="form-group">
                   <label class="text-white"   for="">Pays :</label>
                <p class="pays">
                    <select name="pays"class="validate[required,custom[pays]] feedback-input" id="pays" placeholder="pays" id="pays">
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                        <option value="Mali">Mali</option>
                        <option value="Sénégal">Sénégal</option>
                        <option value="France">France</option>
                        <option value="Bénin">Bénin</option>
                        <option value="Togo">Togo</option>
                        <option value="Tchad">Tchad</option>

                        </select>
                  </p>
               </div>
            <div class="submit">
              <input type="submit" value="AJOUT DE LIVRE" id="button-blue"/>
              <div class="ease"></div>
            </div>
            <section class="col-md-3"><button class="btn btn-dark">Retour</button></section>
          </form>

        </div>

</body>
</html>
