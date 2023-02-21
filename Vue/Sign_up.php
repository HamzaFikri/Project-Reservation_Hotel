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
      .link
        {
            font-size: .875rem;
            color: #6582B0;
        }
    </style>
  </head>
  <body >
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center "
  >
      <section class="intro pt-4">
	  <div class="mask d-flex align-items-center">
		<div class="container">
		  <div class="row justify-content-center">
			<div class="col-12 col-lg-10 mx-auto ">
			  <div class="card" style="border-radius: 1rem;">
				<div class="card-body p-5">
  
				  <h1 class="mb-5 text-center">Inscrivez-vous pour profiter du tarif réservé aux membres lors de votre réservation</h1>
  
				  <form class="was-validated" method="POST" action="../Controllers/SignupController.php">
					<!-- 2 column grid layout with text inputs for the first and last names -->
					<div class="row">

					  <div class="col-12 col-md-6 mb-4">
						<div class="form-outline">
						  <input type="text" class="form-control is-invalid" name="nom" placeholder="First Name" required />
						  <label class="form-label" for="form6Example1">Nom*</label>
						</div>
					  </div>
					  <div class="col-12 col-md-6 mb-4">
						<div class="form-outline">
						  <input type="text" class="form-control is-invalid" name="prenom" placeholder="  Last Name" required />
						  <label class="form-label" for="form6Example2">Prenom*</label>
						</div>
					  </div>
					</div>
  
  
					<!-- Email input -->
					<div class="form-outline mb-4">
					  <input type="email" class="form-control is-invalid" name="email" placeholder="Email@goldentulip.com" required />
					  <label class="form-label" for="form6Example5">Email*</label>
					</div>
  
					   <!-- password input -->
                       <div class="row">
					  <div class="col-12 col-md-6 mb-4">
						<div class="form-outline">
						  <input type="password" class="form-control is-invalid" name="password" placeholder="password" required />
						  <label class="form-label" for="form6Example1">Mot de passe *</label>
						</div>
					  </div>
					  <div class="col-12 col-md-6 mb-4">
						<div class="form-outline">
						  <input type="number" class="form-control is-invalid" name="tele" placeholder="phone number" required />
						  <label class="form-label" for="form6Example2">Numero de telephone *</label>
						</div>
					  </div>
					<!-- Submit button -->
					<center><button type="submit" class="btn btn-warning btn-rounded btn-block " name="signup">Creer un Compter</button></center><br><br>
                    <hr>
                    <div class="col-4">   
                    <p><a href="#" class="link warning">Vous avez Deja un Compte ?</a></p>    
                    <a href="Accueill.php"><button type="button"class="btn btn-outline-warning btn-rounded mt-2 ">Retour</button></a>
                </div>
				  </form>
  
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>




      </div>
</div>
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
        <h5 class="text-warning mb-0">Preparez votre sejour</h5>

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
   <script type="text/javascript">
//CHANGER LA COULEUR  DU NAV SHADOW
var nav = document.querySelector('nav');

window.addEventListener('scroll', function () {
  if (window.pageYOffset > 100) {
    nav.classList.add('bg-dark', 'shadow');
  } else {
    nav.classList.remove('bg-dark', 'shadow');
  }
});
</script>
  </body>
</html>
