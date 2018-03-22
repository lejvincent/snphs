<?php include ($_SERVER["DOCUMENT_ROOT"].'snphs/prog/init.php'); ?>
<?php
$titrepage = "Catégories";
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
                <a class="nav-link" href="accueil.php">Accueil</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="categories.php">Catégories <span class="sr-only">(current)</span></a>
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
<div class="container" id="containercategories">
  <div class="row>">
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div class="col-12" id="entetecategories">
      <button class="btn btn-warning tout">Tout</button>
      <button class="btn btn-warning filter" target="txt">Blagues</button>
      <button class="btn btn-warning filter" target="pic">Images</button>
      <button class="btn btn-warning filter" target="vid">Vidéos</button>
    </div>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div class="row " id="contenucategories">
      <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
      <div class="col-3">
        <div class="card txt">
          <div class="card-body">
            <h5 class="card-title">Chuck Norris</h5>
            <p class="card-text">Chuck Norris a déjà compté jusqu´à l´infini. Deux fois. </p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card txt">
          <div class="card-body">
            <h5 class="card-title">Chuck Norris</h5>
            <p class="card-text">Chuck Norris donne fréquemment du sang à la Croix-Rouge. Mais jamais le sien.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card txt">
          <div class="card-body">
            <h5 class="card-title">Chuck Norris</h5>
            <p class="card-text">Chuck Norris comprend Jean-Claude Van Damme.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card txt">
          <div class="card-body">
            <h5 class="card-title">Chuck Norris</h5>
            <p class="card-text">Au restaurant, quand Chuck Norris commande un steak, le steak obéit.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card pic">
          <img class="card-img-top" src="images/bimage1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Quand le commercial m'invite à venir jeter un oeil aux nouvelles specs.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card pic">
          <img class="card-img-top" src="images/bimage4.gif" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Quand un client vient au bureau le vendredi et demande la mise en prod de son site.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card pic">
          <img class="card-img-top" src="images/bimage2.gif" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Quand le chef me cherche pour une démo client.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card pic">
          <img class="card-img-top" src="images/bimage3.gif" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Vendredi, 17h.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card vid">
          <iframe src="https://www.youtube.com/embed/H96cetGuRzQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-3">
        <div class="card vid">
          <iframe src="https://www.youtube.com/embed/AakBdDZxbqM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-3">
        <div class="card vid">
          <iframe src="https://www.youtube.com/embed/4aqdkIpXo90?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-3">
        <div class="card vid">
          <iframe src="https://www.youtube.com/embed/pKU15SXVmeE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    </div>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Précédent</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Suivant</a>
        </li>
      </ul>
    </nav>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
  </div>
</div>
<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<?php include ($_SERVER["DOCUMENT_ROOT"].'snphs/prog/bot.php'); ?>
