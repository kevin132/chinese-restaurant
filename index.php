 <?php 
  try{
    $db = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch (Exception $exception)
  {
    die( 'Erreur : ' . $exception->getMessage() );
  }

  if(isset($_POST['saveDate'])){
  $query = $db->prepare("INSERT INTO restaurant (created) VALUES (?)");
          $newUser = $query->execute(
              [
                  $_POST['dateReservation'],
               
              ]
          );
        }
  ?>
      <!doctype html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link href="assets/css/vanillaCalendar.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <title>Elysées Hongkong</title>
      </head>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top w-100">
        <div class="container-fluid nav-edit w-100">
          <div class="row   justify-content-between flex-nowrap w-100">
            <div class="logo">
              <li>
                <a class="restaurant-title" href="#" id="res">
                    <img src="assets/image/logo_resto.png" height="30"; width="180" id=logo class="mt-3 ml-4" alt="Elysées Hongkong restaurant">
               </a>
             </li>
           </div>
           <div class="home-nav text-center d-flex align-items-center mt-3">
            <ul>
              <li>
                <a class="nav-item nav-word" href="#">Accueil</a>
              </li>
              <li>
                <a class="nav-item nav-word" href="#">La Carte</a>
              </li>
              <li>
                <a class="nav-item nav-word" href="#">Livraison</a>
              </li>
              <li>
                <a class="nav-item nav-word" href="#">Contact</a>
              </li>
            </ul>
          </div>
          <div class="home-info">
            <div class="row">
              <div class="btn h-bt-reserve" data-toggle="modal" data-target="#exampleModal">
               <a class="nav-reserve" href="#">Réserver</a>
             </div>
             <div class="h-bt-reserve">
              <a class="nav-reserve " href="#">Appeler</a>
            </div>
            <div class="toggle"><i class="fas fa-bars menu"></i></div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Réserver</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
 <!--calendar-->
     <div class="modal-body">
                <!--form for date of reservation -->
                        <form action="index.php" method="POST">
                             <!-- input  date -->
                             <input type="text"  name="dateReservation" id="h-modal-date" data-calendar-label="picked">
                             <input type="hidden"  name="dateReservationHidden" id="h-modal-date-hidden"  data-calendar-label="picked">
                             <!--end input date -->
                                    <button type="submit" name="saveDate">Save changes</button>
                        </form>
                <!--end form -->
        <div class="container">
          <div id="v-cal">
            <div class="vcal-header">
              <button class="vcal-btn" data-calendar-toggle="previous">
                <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                </svg>
              </button>

              <div class="vcal-header__label" data-calendar-label="month">
                March 2017
              </div>
              <button class="vcal-btn" data-calendar-toggle="next">
                <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg>
              </button>
            </div>
            <div class="vcal-week">
              <span>L</span>
              <span>M</span>
              <span>M</span>
              <span>J</span>
              <span>V</span>
              <span>S</span>
              <span>D</span>
            </div>
            <div class="vcal-body" data-calendar-area="month"></div>
          </div>
             <!--time-->
      <div id="timeReservation">
        <!--create a table -->
        <div class="mealsReservation">
          Déjeuner
        </div>
        <div class="mealsReservation">
          Dinner
        </div>
      </div>
      <!--endtime-->
        </div>
      </div>
   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
<!--end calendar -->
  <!--end modal -->
  <header class="d-flex justify-content-center flex-column">
    <div class="container">
      <div class="col-lg-7">
        <h1 class="h-header-text">Bienvenue<br>au restaurant Elysées HongKong</h1>
        <h2 class="h-header-text">Cuisine chinoise et thailandaise</h2>
        <p class="h-header-text">
          Venez découvrir ou redécouvrir une cuisine asiatique aux spécialités thaïlandaise et chinoises.
        </p>
      </div>
    </div>
  </header>

  <section class="h-about d-flex justify-content-center align-items-center w-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
         <h2 class="h-about-title mt-4"><i>Une cuisine aux saveurs authentiques</i></h2>
         <p class="h-about-text">La maison vous
          propose de nombreux plats traditionnels cuisinés avec une grande finesse. Les produits sont d'une
          véritable fraicheur et les plats d'une saveur authentique.La maison vous
        propose vous propose des plats typique d'asie . Laissez-vous tenter par les suggestions du jour!</p>
      </div> 

      <div class="col-lg-6">
       <img src="assets/image/table.jpg"  class="w-100" alt="">
     </div>

   </div>
  </div>
  </section>

  <div class="h-food">
    <div class="container">
      <div class="row">
       <div class="col-lg-6">
         <img src="assets/image/table.jpg"  class="w-100" alt="">
       </div>
       <div class="col-lg-6">
        <h2 class="h-about-title"><i>Le restaurant</i></h2>
        <p class="h-about-text">Un restaurant avec un environnement modernité et sobre  , avec nappe serviette blanche et
        banquette . Idéal pour les repas en famille ou entre amis.</p>
      </div>

    </div>  
  </div>
  </div>

  <section class="h-features">
    <div class="row no-gutters ">
      <div class="col-lg-6 text-center">
       <h3>Accéssibilité</h3>
       <p>Le restaurant se situe au 80 rue Michel Ange Paris 75016</p>
       <a href="#">Plus d'info...</a>
     </div>
     <div class="col-lg-6 text-center">
      <h3>Horaire et Ouverture</h3>
      <p>Le mercredi est le jour de femeture du restaurant. <br>  
        Notre restaurant est ouvert  de 12h à 14h30 puis de 19h à 22h30
      </p>
    </div>
  </div>
  </section>
<!--footer-->
  <footer class="h-foot">
    <div class="container">
      <div class="row h-100 ">
        <div class="col-lg-6 text-center">Adresse et contact</div>

        <div class="col-lg-6 text-center">
          <div class="logoCompany">
            <img src="assets/image/Deliveroo_logo.png" height="40" width="auto"alt="Logo Deleveroo">
          </div>
          <div class="logoCompany"></div>
          <div class="logoCompany"></div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="assets/js/script.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/vanillaCalendar.js" ></script>
  <script>
    window.addEventListener('load', function () {
      vanillaCalendar.init({
        disablePastDays: true
      });
    })
  </script>
  </body>

  </html>