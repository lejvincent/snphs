<?php include 'prog/init.php'; ?>
<?php
  $titrepage ="Membres";
?>
<?php include 'prog/top.php'; ?>
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
              <li class="nav-item active">
                <a class="nav-link" href="membres.php">Membres</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profil.php">Profil</a>
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
  <div class="container">
    <div class="row">
      <?php
      $reponse = $bdd->query('SELECT * FROM users') or die(print_r($bdd->errorInfo()));

      while($donnees = $reponse->fetch()) {
        ?>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $donnees['pseudo']; ?></h5>
              <p class="card-text">Profil : <a href="profil.php?ID=<?php echo $donnees['IDuser']; ?>"><button class="btn btn-warning">Voir</button></a></p>
            </div>
          </div>
        </div>
        <?php
      }
      $reponse->closeCursor();
      ?>
    </div>
  </div>
  <?php include 'prog/bot.php'; ?>
