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

<body class="d-flex flex-column min-vh-100" onload="document.body.style.opacity='1'">
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark" id="mainNavbar ">
        <div class="container-fluid ">
            <a class="navbar-brand " href="/home">
                <h2 class="logo-insa">INSA'CAR</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar" aria-label="Toggle">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="mob-navbar ">
                <ul class="navbar-nav mb-2 mb-lg-0 mx-auto ms-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active " aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="# ">About Us</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle " href="# " id="navbarDropdown " role="button " data-bs-toggle="dropdown " aria-expanded="false ">Our Services</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="#modal"  data-bs-toggle="modal" data-bs-target="#modal">Contact Us</a>
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
        <h1 class="text-center cate-title">
            Rent a 7 Places Vehicle
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_7places/bmw-2.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title fw-bold text-white">BMW</h5>
                        <form action="/payment" mothod="POST">
                            <a href="/payment?" class="btn btn-warning">rent now</a>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <img src="./assets/cars/category_7places/citroen-van.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">Citroen Van</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_7places/mb-v.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">MB-V</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_7places/peugeot-5008.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">Peugeot 5008</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="berline" class="container" style="display:none">
        <h1 class="text-center cate-title">
            RENT a berline
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_berline/audi-a1.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title fw-bold text-white">Audi A1</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <img src="./assets/cars/category_berline/bmw-1er.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">BMW 1</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_berline/fiat-500.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">Fiat 500</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_berline/peugeot-208.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">peugeot 208</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_berline/peugeot-308.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">peugeot 308</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_berline/vw-t.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">VW-t</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cabriolet" class="container" style="display:none">
        <h1 class="text-center cate-title">
            RENT a Cabriolet Car
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_cabriolet/bmw-2er.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title fw-bold text-white">bmw-2er</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <img src="./assets/cars/category_cabriolet/bmw-z4.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">bmw-z4</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_cabriolet/mb-c.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">mb c</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_cabriolet/mini-cooper.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">mini cooper</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <img src="./assets/cars/category_cabriolet/porsche-911.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">porsche 911</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <img src="./assets/cars/category_cabriolet/vw-t.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">vw t</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="luxe" class="container" style="display:none">
        <h1 class="text-center cate-title">
            RENT A LUXURY car
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_luxe/mb-c.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title fw-bold text-white">mb c</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <img src="./assets/cars/category_luxe/porsche-panamera.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">porsche panamera</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_luxe/porsche-panamera4.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">porsche panamera 4</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_luxe/porsche-taycan.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white"> porsche taycan </h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="suv" class="container-fluid vh-100" style="display:none">
        <h1 class="text-center cate-title">
            RENT SUV
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_suv/audi-q5.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title fw-bold text-white">audi q5</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <img src="./assets/cars/category_suv/bmw-x1.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">bmw x1</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_suv/bmw-x3.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">bmw x3</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_suv/citroen-ds7.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">citroen ds7</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_suv/ford-kuga.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">ford kuga</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_suv/range-rover.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">range rover</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="utilitaire" class="container-fluid vh-100" style="display:none">
        <h1 class="text-center cate-title">
            RENT a Utilitaire
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_utilitaire/audi-a6.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title fw-bold text-white">Audi a6</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <img src="./assets/cars/category_utilitaire/skoda-octavia.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">skoda octavia</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_utilitaire/vw-passat.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">VW passat</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ve" class="container vh-100" style="display:none">
        <h1 class="text-center cate-title">
            RENT a electric vehicle
        </h1>
        <div class="row row-cols-auto g-4 text-center">
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_ve/ds3.png" class="card-img-top" alt="bmw">
                    <div class="card-body mt-5 border-top ">
                        <h5 class="card-title fw-bold text-white">DS 3</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <img src="./assets/cars/category_ve/fiat500.png" class="card-img-top" alt="">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">Fiat 500</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_ve/jaguar.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">jaguar</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_ve/skoda.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">skoda</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_ve/smart1.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">smart 1</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./assets/cars/category_ve/smart2.png" class="card-img-top" alt="...">
                    <div class="card-body mt-5 border-top">
                        <h5 class="card-title fw-bold text-white">smart 2</h5>
                        <a href="" class="btn btn-warning">rent now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- CONTACT US SENDING MESSAGE -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="email-box-title">SEND US A MESSAGE</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Here it goes the contact form -->
                    <div class="modal-body" style="letter-spacing: 0.2em;">
                        <form action="https://formsubmit.co/c96f3a3cc25f6b9d9b00a392e9257551" method="POST" class="">
                            <div class="form-group my1">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name" required />
                            </div>
                            <div class="form-group my-2">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required />
                            </div>
                            <div class="form-group my-2">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" aria-describedby="emailHelp" placeholder="Enter subject" required />
                            </div>
                            <div class="form-group my-1">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <div class="mx-auto my-5">
                                <button type="submit" class="btn btn-secondary text-right" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary text-right">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
</body>

</html>
<?php
$type = $_GET["type"];
echo '<script> document.getElementById("' . $type . '").style.display = "block"; </script>';

?>