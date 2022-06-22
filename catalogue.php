<?php 
logged_only();
if(isset($_SESSION['email']) && isset(valid_donnees($_GET['car']))){
    $_SESSION['car'] = valid_donnees($_GET['car']);
}
   if(isset($_SESSION["email"]))
   {
        $firstname = $_SESSION["name"];
        $lastname = $_SESSION["last name"];
    }

function logged_only(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if(!isset($_SESSION['email'])){
        header('Location: login-form-temp.php');
        exit();
    }
}

function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/catalogue.css">
    <title>Catalogue</title>
</head>

<body onload="document.body.style.opacity='1'">
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark  " id="mainNavbar ">
        <div class="container-fluid ">
            <a class="navbar-brand " href="/home">
                <h2 class=" " id="logo-insa ">INSA'CAR</h2>
            </a>
            <button class="navbar-toggler " type="button " data-bs-toggle="collapse " data-bs-target="#mob-navbar " aria-label="Toggle ">
        <span class="navbar-toggler-icon "></span>
      </button>
            <div class="collapse navbar-collapse " id="mob-navbar ">
                <ul class="navbar-nav mb-2 mb-lg-0 mx-auto ms-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active " aria-current="page " href="/home">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="# ">About Us</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle " href="# " id="navbarDropdown " role="button " data-bs-toggle="dropdown " aria-expanded="false ">Our Services</a
            >
            <ul class="dropdown-menu animate slideIn " aria-labelledby="navbarDropdown ">
              <li><a class="dropdown-item " href="# ">Buy a car</a></li>
                    <li><a class="dropdown-item " href="# ">Reserve a car</a></li>
                    <li>
                        <a class="dropdown-item " href="# ">Car renting</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider " />
                    </li>
                    <li><a class="dropdown-item " href="# ">Explore More</a></li>
                </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="# " data-bs-toggle="modal " data-bs-target="#modal ">Contact Us</a>
                </li>
                </ul>
                <ul class="navbar-nav p-lg-0 ">
                    <li class="d-flex nav-item px-lg-2 py-md-2 ">
                        <form action="./login-form.php " class="d-flex ">
                            <button class="btn btn-outline-warning " type="submit ">Login</button>
                        </form>
                    </li>
                    <li class="d-flex nav-item px-lg-2 py-md-2 ">
                        <form action="./register-form.php " class="d-flex ">
                            <button class="btn btn-warning " type="submit ">Sign Up</button>
                        </form>
                    </li>
                </ul>


            </div>
        </div>
    </nav>





    <section id="7places" class="container" style="display:none">
        <h1 class="text-center text-primary">
            Rent a 7 Places Vehicle
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                
                        <form action="./payment.php" method="GET">
                            <div class="card">
                            
                            <img src="./assets/cars/category_7places/bmw-2.png" class="card-img-top" alt="bmw">
                            <div class="card-body mt-5 border-top ">
                            <h5 class="card-title">BMW</h5>
                            <input type="hidden" name="car" value="bmw-2"/>
                            <button  class="btn btn-warning" type="submit">Rent now</button>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card ">
                    <img src="./assets/cars/category_7places/citroen-van.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">Citroen Van</h5>
                            <input type="hidden" name="car" value="citroen-van"/>
                            <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_7places/mb-v.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">MB-V</h5>
                            <input type="hidden" name="car" value="mb-v"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_7places/peugeot-5008.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">Peugeot 5008</h5>
                            <input type="hidden" name="car" value="peugeot-5008"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="berline" class="container" style="display:none">
        <h1 class="text-center text-primary">
            RENT a berline
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_berline/audi-a1.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title">Audi A1</h5>
                            <input type="hidden" name="car" value="audi-a1"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card ">
                    <img src="./assets/cars/category_berline/bmw-1er.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">BMW 1</h5>
                            <input type="hidden" name="car" value="bmw-1er"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_berline/fiat-500.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">Fiat 500</h5>
                            <input type="hidden" name="car" value="fiat-500"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_berline/peugeot-208.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">peugeot 208</h5>
                            <input type="hidden" name="car" value="peugeot-208"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_berline/peugeot-308.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">peugeot 308</h5>
                            <input type="hidden" name="car" value="peugeot-308"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_berline/vw-t.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">VW-t</h5>
                            <input type="hidden" name="car" value="vw-t"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cabriolet"class="container" style="display:none">
        <h1 class="text-center text-primary">
            RENT a Cabriolet Car
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_cabriolet/bmw-2er.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title">bmw-2er</h5>
                        <input type="hidden" name="car" value="bmw-2er"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card ">
                    <img src="./assets/cars/category_cabriolet/bmw-z4.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">bmw-z4</h5>
                        <input type="hidden" name="car" value="bmw-z4"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_cabriolet/mb-c.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">mb c</h5>
                        <input type="hidden" name="car" value="mb-c"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_cabriolet/mini-cooper.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">mini cooper</h5>
                        <input type="hidden" name="car" value="mini-cooper"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card ">
                    <img src="./assets/cars/category_cabriolet/porsche-911.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">porsche 911</h5>
                        <input type="hidden" name="car" value="porsche-911"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card ">
                    <img src="./assets/cars/category_cabriolet/vw-t.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">vw t</h5>
                        <input type="hidden" name="car" value="vw-t"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="luxe"class="container" style="display:none">
        <h1 class="text-center text-primary">
            RENT A LUXURY car
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_luxe/mb-c.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title">mb c</h5>
                        <input type="hidden" name="car" value="mb-c"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card ">
                    <img src="./assets/cars/category_luxe/porsche-panamera.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">porsche panamera</h5>
                        <input type="hidden" name="car" value="porsche-panamera"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_luxe/porsche-panamera4.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">porsche panamera 4</h5>
                        <input type="hidden" name="car" value="porsche-panamera4"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_luxe/porsche-taycan.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title"> porsche taycan </h5>
                        <input type="hidden" name="car" value="porsche-taycan"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="suv"class="container" style="display:none">
        <h1 class="text-center text-primary">
            RENT SUV
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_suv/audi-q5.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title">audi q5</h5>
                        <input type="hidden" name="car" value="audi-q5"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card ">
                    <img src="./assets/cars/category_suv/bmw-x1.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">bmw x1</h5>
                        <input type="hidden" name="car" value="bmw-x1"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_suv/bmw-x3.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">bmw x3</h5>
                        <input type="hidden" name="car" value="bmw-x3"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_suv/citroen-ds7.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">citroen ds7</h5>
                        <input type="hidden" name="car" value="citroen-ds7"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_suv/ford-kuga.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">ford kuga</h5>
                        <input type="hidden" name="car" value="ford-kuga"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_suv/range-rover.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">range rover</h5>
                        <input type="hidden" name="car" value="range-rover"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="utilitaire"class="container" style="display:none">
        <h1 class="text-center text-primary">
            RENT a Utilitaire
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_utilitaire/audi-a6.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title">Audi a6</h5>
                        <input type="hidden" name="car" value="audi-a6"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card ">
                    <img src="./assets/cars/category_utilitaire/skoda-octavia.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">skoda octavia</h5>
                        <input type="hidden" name="car" value="skoda-octavia"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_utilitaire/vw-passat.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">VW passat</h5>
                        <input type="hidden" name="car" value="vw-passat"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ve"class="container" style="display:none">
        <h1 class="text-center text-primary">
            RENT a electric vehicle
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_ve/ds3.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title">DS 3</h5>
                        <input type="hidden" name="car" value="ds3"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card ">
                    <img src="./assets/cars/category_ve/fiat500.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">Fiat 500</h5>
                        <input type="hidden" name="car" value="fiat500"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_ve/jaguar.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">jaguar</h5>
                        <input type="hidden" name="car" value="jaguar"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_ve/skoda.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">skoda</h5>
                        <input type="hidden" name="car" value="skoda"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_ve/smart1.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">smart 1</h5>
                        <input type="hidden" name="car" value="smart1"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <form action="./payment.php" method="GET">
                <div class="card">
                    <img src="./assets/cars/category_ve/smart2.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title">smart 2</h5>
                        <input type="hidden" name="car" value="smart2"/>
                        <button  class="btn btn-warning" type="submit">Rent now</button>
                        </form>              
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container my-5 p-0 m-0" id="wrap-footer">
        <footer style="background-color: #c7c7c7;">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <h5 class="mb-3 text-dark fw-bold">Footer content</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam voluptatem veniam, est atque cumque eum delectus sint!
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3 text-dark fw-bold">More info</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <a href="#!" style="color: #4f4f4f;">FAQ</a>
                            </li>
                            <li class="mb-1">
                                <a href="#!" style="color: #4f4f4f;">Classes</a>
                            </li>
                            <li class="mb-1">
                                <a href="#!" style="color: #4f4f4f;">Pricing</a>
                            </li>
                            <li>
                                <a href="#!" style="color: #4f4f4f;">Safety</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-4 fw-bold">Our social network</h5>
                        <ul class="list-unstyled d-flex justify-content-around me-4">
                            <li class="ms-4">
                                <a class="link-dark" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </svg></a></li>
                            <li class="ms-4">
                                <a class="link-dark" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-meta" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a54.944 54.944 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3c.319 0 .625.039.924.122.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714Zm1.516 2.224c-.252-.41-.494-.787-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87l-.937-1.565ZM4.846 4.756c.725.1 1.385.634 2.34 2.001A212.13 212.13 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264.091 0 .181.006.27.018Z"/>
        </svg></a>
                            </li>
                            <li class="ms-4">
                                <a class="link-dark" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-dark" href="#">insacar.fr</a>
            </div>
            <!-- Copyright -->
        </footer>

    </div>
</body>

</html>
<?php
    $type = $_GET["type"];
    echo '<script> document.getElementById("'.$type.'").style.display = "block"; </script>';

?>