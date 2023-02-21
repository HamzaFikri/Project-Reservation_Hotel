
<?php
require_once ("../Database/Db.php");
    session_start();
    if(empty($_SESSION['Nom']))
    {     
        header("location:sign-in.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
      .banner-image {
        background-image: url('img/3.jpg');
        background-size: cover;
        
      }
      .blank
      {
         padding-top:40px ;
         padding-bottom:40px ;
      }
    </style>
  </head>
  <body >
     <!-- header -->
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
      <div class="container">
      <a class="navbar-brand" href="#">
      <img
        src="img/logo.png"
        height="70"
        width="120"
        alt=""
        loading="lazy"
      />
    </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-warning " href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Restaurants</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">piscines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Espace vert</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Special Offres</a>
            </li>
           
            <li class="nav-item">
            <a href="../Controllers/LogOut.php"><button type="button" class="btn btn-outline-warning text-white ms-4">Se Deconnecter <?php echo $_SESSION['Nom'] ?> </button></a>
            </li>
            <li class="nav-item">
            <a href="Reservation.php"><button type="button" class="btn btn-warning text-white ms-4"> Reserver </button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center "
  >
      <div class="content text-center">
        <h1 class="text-white">Golden Tulip Safi  : un hôtel de luxe intemporel, inoubliable, inimitable</h1>
        <a href="Reservation.php"><button class="btn btn-warning" type="button">Réservez Dès Maintenant</button></a>
      </div>
</div>
<div class="blank"></div>
<div class="container pt-4">
    <div class="row">
    <center><h1>Nos Services</h1></center>
      <div class="col-lg-4 col-md-6">
        <center><img src="img/chambre.jpg" style="width: 300px ;height: 200px;border-radius:50%;">
        <h3>CHAMBRE</h3>
        <p>Vous pouvez choisir une chambre Classic ou opter pour nos chambres Deluxe pour bénéficier de plus d'espace. Dans nos suites Junior..</p>
      </center>
      </div>

      <div class="col-lg-4 col-md-6 ">
        <center>  <center><img  src="img/Apparts.jpg" style="width: 300px ;height: 200px;border-radius:50%;">
        <h3>APPARTEMENT</h3>
        <p>Vous bénéficierez de différentes prestations notamment un service de ménage inclus, un réfrigérateur et une cuisine. Pas de tracas, vous profiterez aussi d‘un appart‘hôtel climatisé à Safi!</p>
      </center>
      </div>

      <div class="col-lg-4 col-md-6">
      <center>
      <center><img src="img/Bungalow.jpg" style="width: 300px ;height: 200px;border-radius:50%;"> 
        <h3>BUNGALOW</h3>
        <p>Vivez une expérience inoubliable dans nos bungalows de plage situés au cœur des plus beaux spots de kitesurf à Safi. Un séjour à ne pas manquer.</p>
      </center>
      </div>
    </div>
</div>
<div class="blank"></div>
<center><h1>Nos Meilleures Offres</h1></center>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/off1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-warning">Stay More, Save More</h5>
        <p class="card-text">Les avantages de l'offre :<br>
25% de réduction sur le tarif flexible . <br>
Réservez 4 nuits consécutives ou plus est requis .</p>
<button type="button" class="btn btn-warning text-black">Voir l'offre</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/off2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-warning">OFFRE WEEKEND Petit déjeuner Inclus</h5>
        <p class="card-text">Les avantages de l'offre :<br>
15% de réduction sur l'hébergement.<br>
Petit déjeuners offerts.</p>
<button type="button" class="btn btn-warning text-black">Voir l'offre</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/off3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-warning">Bloomy Days Petit déjeuner inclus</h5>
        <p class="card-text">Les avantages de l'offre :<br>
Les bonnes affaires fleurissent !<br>
Petit déjeuner offert pour les enfants.</p>
<button type="button" class="btn btn-warning text-black">Voir l'offre</button>
      </div>
    </div>
  </div>
</div>
<div class="blank"></div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button h5 text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Votre événement sur-mesure : élégance et raffinement
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Au cœur de l’hôtel Golden  Tulip Safi, des salles de conférence splendides, des résidences privées et des jardins enchanteurs ouvrent le bal du majestueux et de l’inoubliable.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed  h5 text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      3 restaurants signature au cœur du Palace
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Bastions de l’excellence culinaire et gastronomique, les restaurants du Golden Tulip Safi se font complices de vos instants gourmands. D’un côté, 2 restaurants supervisés par le Chef français Yannick Alléno présagent d’un voyage sensoriel mémorable au cœur de la Ville Ocre. De l’autre, la dernière née des grandes tables du Palace, orchestrée par les talents du Chef italien multi-étoilé Massimiliano Alajmo, vous emporte au cœur d’une expérience gourmande unique.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed  h5 text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Le Jardin et sa piscine, une poésie arabo-andalouse à ciel ouvert
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Notre palace déploie un écrin rêvé pour qui souhaite s’accorder un moment de fraîcheur au bord d’une piscine à Safi. Végétation foisonnante, murmure des fontaines, transats et pavillons privés.
      </div>
    </div>
  </div>
</div>
<div class="blank"></div>
    <!-- footer -->
    <footer class="text-center text-white bg-dark" >
  <div class="container p-4 ">
  <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-warning">GOLDEN TULIP</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white">Mentions légales</a>
          </li>
          <li>
            <a href="#!" class="text-white">Conditions générales de vente</a>
          </li>
          <li>
            <a href="#!" class="text-white">Conditions générales d'utilisation</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-warning mb-0">NOS OFFRES</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">Offre WeekEnd dej inclus</a>
          </li>
          <li>
            <a href="#!" class="text-white">Pack Ramadan</a>
          </li>
          <li>
            <a href="#!" class="text-white">Piscines</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-warning mb-0">PREPAREZ VOTRE SEJOURE</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">Ma reservation</a>
          </li>
          <li>
            <a href="#!" class="text-white">Réunions et événements</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-warning mb-0">BESOIN D'AIDE</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">FAQ</a>
          </li>
          <li>
            <a href="#!" class="text-white">Contactez nous</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <section class="">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-4">
          <div class="ratio ratio-16x9">
            <iframe
              class="shadow-1-strong rounded"
              src="https://www.youtube.com/embed/NM3IPdQ1EgM"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </section>
  </div>
  
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   <script src="js/javascript.js" type="text/javascript">

</script>
  </body>
</html>
