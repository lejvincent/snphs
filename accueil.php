<?php include ($_SERVER["DOCUMENT_ROOT"].'snphs/prog/init.php'); ?>
<?php
$titrepage = "Accueil";
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
              <li class="nav-item active">
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
    <div class="col-3"></div>
    <div id="carouselExampleIndicators" class="col-6 carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/4.jpg" alt="Four slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="col-3"></div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div id="Chuck_fr"></div>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Les articles les plus drôles</h5>
          <p class="card-text">Il répond à la police nu en mangeant du cassoulet<a href="https://www.20minutes.fr/rennes/1522719-20150121-rennes-police-frappe-porte-nu-mange-cassoulet"> A voir ici</a></p>
          <p class="card-text">L'asiatique voleur de slips et saucissons avait sept identités<a href="http://www.ledauphine.com/ardeche/2014/10/28/le-voleur-de-slips-et-saucissons-avait-sept-identites-differentes"> A voir ici</a></p>
          <p class="card-text">Il barre la route des policiers avec une imprimante pour empêcher l'arrestation de son frère<a href="http://www.paris-normandie.fr/breves/normandie/evreux--il-barre-la-route-des-policiers-avec-une-imprimante-pour-empecher-l-arrestation-de-son-frere-XK3480426"> A voir ici</a></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Le meilleur des Darwin Awards</h5>
          <p class="card-text"><ul>
            <li>Un homme a ouvert une lettre piégée qu’il avait envoyée et qui lui avait été retournée par la poste parce qu’il manquait le timbre</li>
            <li>A Philipsburg, un jeune homme s’est étouffé mortellement en avalant le soutien-gorge pailleté d’une strip-teaseuse, qu’il lui avait retiré avec les dents.</li>
            <li>Un homme en Alaska a lancé un bâton de dynamite sur un lac gelé, pour on ne sait quelles raisons. Sauf que, accompagné de son chien de chasse très bien dressé, celui-ci lui a rapporté. Aïe.</li>
          </ul></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Blagues Carambar</h5>
          <p class="card-text">
            <ul>
              <li>Que font deux tranches de pain quand elles se rencontrent?
                <br>Elles font amie-amie (à mie-à mie)</li>
                <li>Pourquoi les pages d'un livre sont-elles toujours chaudes?
                  <br>Parce qu'elles ont une couverture...</li>
                  <li>Quel animal pas très beau vit en montagne?
                    <br>Un chat laid (châlet)</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <p class="card-text"><center>Le coin des pros de la blague! Steven Seagal vs Chuck Norris!!</center></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<?php include ($_SERVER["DOCUMENT_ROOT"].'snphs/prog/bot.php'); ?>
