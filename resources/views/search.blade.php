@extends('socle',["lien"=>"images/bib5.jpg"])
@section("contenu")
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
                <option value="Pathétique">pathétique</option>
                <option value="Naratif">naratif</option>
                <option value="Comique">comique</option>
                <option value="Théatral">théatrale</option>
                <option value="Réaliste">réaliste</option>
                <option value="Dramatique">dramatique</option>
                <option value="Informatif">informatif</option>
            </select>
          </p>
          <p class="name">
            <select name="pays"class="validate[required,custom[type de livre]] feedback-input" id="type de livre" placeholder="type de livre" id="">
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                <option value="France">France</option>
                <option value="Nigéria">Nigéria</option>
                <option value="Niger">Niger</option>
                <option value="Togo">Togo</option>
                <option value="Bénin">Bénin</option>
                <option value="Etat-unis">Etat-Unis</option>
                <option value="Mali">Mali</option>
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
</div>
@endsection

