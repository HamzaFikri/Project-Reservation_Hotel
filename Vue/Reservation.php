
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
    <link rel="stylesheet" href="Style/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 
</head>

<body>
    <!-- header -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" height="70" width="120" alt="" loading="lazy" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                   <a class="nav-link text-white " href="AccueillClient.php">Home</a>
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
                </ul>
            </div>
        </div>
    </nav>
    <div class="blank"></div>
    <div class="banner-image w-100 vh-200 d-flex justify-content-center align-items-center ">
        <section class="intro pt-4">
            <div class="mask d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 mx-auto ">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="card-body p-5" id='form'>

                                    <h1 class="mb-5 text-center">RESERVER SANS HESITER:PROTOCOLE SANITAIRES
                                        STRICTS,SEJOUR MODIFIABLE</h1>
                                <div class="blank"></div>
                                    <form  class="was-validated" action="../Controllers/Reservation.php" method="post">
                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                        <div class="row">

                                            <div class="col-12 col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="date" class="form-control is-invalid"
                                                        id="validationTextarea" placeholder="First Name" name="datearrive" required />
                                                    <label class="form-label" for="form6Example1">Date d'Arrive*</label>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="date" class="form-control is-invalid" name="datedepart"
                                                        id="validationTextarea" placeholder="  Last Name"  required />
                                                    <label class="form-label" for="form6Example2">Date de
                                                        Depart*</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <select class="typebatiment form-control is-invalid" name="typebatiment[1][typebatiment]"required 
                                                        onchange="hotel()">
                                                        <option value="" disabled selected>Selectioner type de
                                                            reservation</option>
                                                        <option value="hotel">hotel</option>
                                                        <option value="11">Appartements</option>
                                                        <option value="12">Bungalow</option>
                                                    </select>
                                                    <label class="form-label" for="form6Example1">Type de Batiment
                                                        :</label>
                                                </div>
                                            </div>  
                                            <div id="Addbatiment"></div>      
                                            <div class="col-12 col-md-3 mb-4">
                                                <div class="form-outline">
                                                    <img src="img/add-256.png" width="60" height="60" id="plusbatiment"
                                                            onclick="addbatiment()">
                                                            <label class="form-label" for="Addbat">Ajouter autre batiment
                                                        :</label>
                                                </div>
                                            </div>
                    
                                        </div>
                                            <div class="row " id="cont">
                                           
                                            </div>
                                            <div class="enfants">
    
                                            </div>
                                                <!-- Submit button -->
                                                <center><button type="submit"
                                                         name="reserver"class="btn btn-warning btn-rounded btn-block ">Reserver</button>
                                                </center><br><br>
                                                <hr> 
                                               
                                    </form> 
                                   
                                    <?php
                                    if(!empty($_SESSION['Total']))
                                    {
                                    
                                        ?>
                                        <script>
                                            var dd=document.getElementById('form')
                                            dd.innerHTML=` <h1 class="mb-5 text-center text-success ">Votre reservation pass avec succes avec le total `+<?php echo $_SESSION['Total']  ?>+`
                                            MAD </h1>
                                            <p class="font-monospace">- Code Reservation :<?php echo $_SESSION['Id_Reservation']  ?></p>
                                            <p class="font-monospace">- Date Debut Sejour : <?php echo $_SESSION['DATEARRIVE']  ?></p> 
                                            <p class="font-monospace">- Date Fin Sejour :<?php echo $_SESSION['DATEDEPART']  ?></p>
                                            
                                            `;
                                        </script>
                                  <?php  }

unset($_SESSION['Total']);
?>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
            </section>
                    </div>
         
    </div>

    </div>
    </div>

    <!-- footer -->
    <footer class="text-center text-white bg-dark">
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
                            <iframe class="shadow-1-strong rounded" src="https://www.youtube.com/embed/NM3IPdQ1EgM"
                                title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </footer>
    <script src="./js/javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>