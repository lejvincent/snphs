<?php include ($_SERVER["DOCUMENT_ROOT"].'snphs/prog/init.php'); ?>
<?php
$titrepage = "Connexion / Inscription";
?>
<?php include ($_SERVER["DOCUMENT_ROOT"].'snphs/prog/top.php'); ?>
<body>

  <div class="container">
    <header>
      <div class="text-center">
        <img class="img-fluid" src="images/banniere.png" alt="Space Lemons">
      </div>
    </header>
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="accueil.php">Accueil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categories.php">Catégories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="membres.php">Membres</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profil.php">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="preferences.php">Préférences</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link"  href="login.php">Connexion</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" aria-label="Search">
              <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<div class="container">
  <div class="row">
    <div class="col" id="carousel">
      <div id="slider">
        <a href="#" class="control_next">></a>
        <a href="#" class="control_prev"><</a>
        <ul>
          <li><img src="images/1.jpg"></li>
          <li><img src="images/2.jpg"></li>
          <li><img src="images/3.jpg"></li>
          <li><img src="images/4.jpg"></li>
        </ul>
      </div>
      <div id="bubble">Hello, World!</div>
    </div>

    <!-- div de connexion -->
    <div class="col" id="form-connex">
      <h2 id="titre-co">Connectez-vous!</h2>
      <form class="form-signin">
        <label for="inputEmail" class="sr-only">Adresse mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="exemple@mail.com" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="*********" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <button class="btn btn-lg btn-warning btn-block" type="submit" id="btn_connexion">Connexion</button>
      </form>
      <p>Ou</p>
      <button class="btn btn-lg btn-warning btn-block" type="button" id="btn-inscription" >S'inscrire</button>
    </div>

    <!-- div d'inscription -->

    <div class="col-6" id="form-inscrip" >
      <h2 class= "mt-2 mb-5"> Formulaire d'inscription</h2>
      <form id="FormuInscription" " method="post">
        <div class="form-group">
          <label for="AdMail">Adresse Mail</label>
          <input type="email" class="form-control" id="AdMail" placeholder="name@example.com" ">
        </div>

        <div class="form-group">
          <label for="Pseudo">Pseudo</label>
          <input type="text" class="form-control" id="Pseudo" placeholder="Pseudo (minimum 4 caractères)" taille="4">
        </div>

         <div class="form-group">
              <label for="flatpickr">Date de naissance</label>
              <input id="flatpickr" type="text" class="form-control selector" placeholder="jj-mm-aaaa">
        </div>


        <div class="form-group">
          <label for="Mdp">Mot de Passe</label>
          <input type="password" class="form-control" id="Mdp" placeholder="*********" taille=2>
        </div>

        <div class="form-group">
          <label for="Mdp2">Confirmation du mot de Passe</label>
          <input type="password" class="form-control" id="Mdp2" placeholder="*********">
        </div>

        <div class="form-group mb-4">
          <p> En cochant cette case vous déclarez avoir lu la charte d'Happy Smile et être en accord avec celle-ci.
            <input type="checkbox" name="choix"  id="choix"></p>
          </div>
          <div class="row">
            <button class="btn btn-lg btn-warning btn-block" type="button" id="btn-retour" >Retour</button>
            <button type="submit" class="btn btn-lg btn-warning btn-block" id="envoi">Valider</button>
          </div>
          <p></p>
        </form>
      </div>

    </div>
  </div>

<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<?php include ($_SERVER["DOCUMENT_ROOT"].'snphs/prog/bot.php'); ?>
