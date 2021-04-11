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
          <form class="form" action="{{url('ajout')}}" method="POST"  id="form1">
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
                   <label class="text-white"  for="">Type :</label>
                <p class="name">

                    <select name="type"class="validate[required,custom[type de livre]] feedback-input" id="type de livre" placeholder="type de livre" id="">
                        <option value="Romantique">romantique</option>
                        <option value="Poétique">poétique</option>
                        <option value="Poétique">théatral</option>
                        <option value="Poétique">philosophique</option>
                        <option value="Poétique">naratif</option>
                        <option value="Poétique">livre pour enfant</option>

                        </select>
                  </p>
               </div>
               <div class="form-group">
                   <label class="text-white"   for="">Pays :</label>
                <p class="pays">
                    <select name="pays"class="validate[required,custom[pays]] feedback-input" id="pays" placeholder="pays" id="pays">
                        <option value="Burkina Faso">BURKINA FASO</option>
                        <option value="COTE D'IVOIRE">COTE D'IVOIRE</option>
                        <option value="COTE D'IVOIRE">MALI</option>
                        <option value="COTE D'IVOIRE">SENEGAL</option>
                        <option value="COTE D'IVOIRE">FRANCE</option>
                        <option value="COTE D'IVOIRE">BENIN</option>
                        <option value="COTE D'IVOIRE">TOGO</option>
                        <option value="COTE D'IVOIRE">TCHAD</option>

                        </select>
                  </p>
               </div>
            <div class="submit">
              <input type="submit" value="AJOUT DE LIVRE" id="button-blue"/>
              <div class="ease"></div>
            </div>
          </form>

        </div>
</body>
</html>
