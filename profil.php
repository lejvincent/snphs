<?php include ($_SERVER["DOCUMENT_ROOT"].'/snphs/prog/init.php'); ?>
<?php
if (!empty($_GET)) {
$reponse = $bdd->query('SELECT * FROM users WHERE IDuser = '.$_GET['ID']) or die(print_r($bdd->errorInfo()));
$donnees = $reponse->fetch();
$titrepage = "Profil de " . $donnees['pseudo'];
}
else {
$reponse = $bdd->query('SELECT * FROM users WHERE IDuser = 2010') or die(print_r($bdd->errorInfo()));
$donnees = $reponse->fetch();
$titrepage = "Profil de " . $donnees['pseudo'];
}
?>
<?php include ($_SERVER["DOCUMENT_ROOT"].'/snphs/prog/top.php'); ?>
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
                <a class="nav-link" href="accueil.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categories.php">Catégories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="membres.php">Membres</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="profil.php">Profil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="preferences.php">Préférences</a>
              </li>
              <li class="nav-item">
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
  <div class="container" id="containermilieu">
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div class="row">
        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <div class="col-3">
          <div id ="API_amis">
            <p><h6>Happy Friends Connectés</h6></p>
          </div>
        </div>
        <div class="col-6"></div>
          <div class="col-3" id="sideprofil">
            <img class="img-fluid" src="images/user_logo.png">
            <h2><?php echo $donnees['pseudo']; ?></h2>
            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
            <button class="btn btn-warning" data-toggle="modal" data-target="#envoyermessage">Messages</button>
            <div class="modal fade" id="envoyermessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Envoyer un message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <textarea name="textarea" rows="5" cols="48"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-warning">Envoyer</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
            <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModalCenter">Amis</button>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Amis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p><img class="img_list" src="images/user_logo.png"> Melissa Bouzon </p>
                    <p class="friend_button"><button type="button" class="btn btn-warning">Message</button> <button type="button" class="btn btn-warning">Profil</button></p>
                    <hr>
                    <p><img class="img_list" src="images/user_logo.png"> Romain Ribet </p>
                    <p class="friend_button"><button type="button" class="btn btn-warning">Message</button> <button type="button" class="btn btn-warning">Profil</button></p>
                    <hr>
                    <p><img class="img_list" src="images/user_logo.png"> Vincent Lejeune </p>
                    <p class="friend_button"><button type="button" class="btn btn-warning">Message</button> <button type="button" class="btn btn-warning">Profil</button></p>
                    <hr>
                    <p><img class="img_list" src="images/user_logo.png"> Sylvain Felix </p>
                    <p class="friend_button"><button type="button" class="btn btn-warning">Message</button> <button type="button" class="btn btn-warning">Profil</button></p>
                    <hr>
                    <p><img class="img_list" src="images/user_logo.png"> Louis Dupont </p>
                    <p class="friend_button"><button type="button" class="btn btn-warning">Message</button> <button type="button" class="btn btn-warning">Profil</button></p>
                    <hr>
                    <p><img class="img_list" src="images/user_logo.png"> Martin Legrand </p>
                    <p class="friend_button"><button type="button" class="btn btn-warning">Message</button> <button type="button" class="btn btn-warning">Profil</button></p>
                    <hr>
                    <p><img class="img_list" src="images/user_logo.png"> Monsieur Monsieur </p>
                    <p class="friend_button"><button type="button" class="btn btn-warning">Message</button> <button type="button" class="btn btn-warning">Profil</button></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
            <button class="btn btn-warning" data-toggle="modal" data-target="#invitation">Envoyer une invitation</button>
            <div class="modal fade" id="invitation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Requête Amis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Voulez-vous envoyer une invitation d'amis à cette personne ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-warning">Envoyer</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
          </div>
        </div>
      <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    </div>
  <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

  <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<?php include ($_SERVER["DOCUMENT_ROOT"].'/snphs/prog/bot.php'); ?>
