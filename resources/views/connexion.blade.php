
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
      <form class="form" action="{{url('connexion')}}" method="POST"id="form1">
        @csrf

        <p class="name">
          <input name="email" type="email" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Email" id="name" />
        </p>

        <p class="password">
          <input name="password" type="password" class="validate[required,custom[email]] feedback-input" id="password" placeholder="Mot de passe" />
        </p>
        <div class="submit">
          <input type="submit" value="CONNEXION" id="button-blue"/>
          <div class="ease"></div>
        </div>
      </form>

    </div>

