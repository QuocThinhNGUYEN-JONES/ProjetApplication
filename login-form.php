<?php
 session_start();
 require_once 'connexiondb.php'; // On inclut la connexion à la base de données
 if(!empty($_POST['username']) && !empty($_POST['password']) ) // Si il existe les champs email, password et qu'il sont pas vident
{
     // Patch XSS
     $email = htmlspecialchars($_POST['username']); 
     $password = htmlspecialchars($_POST['password']);
     
     $email = strtolower($email); // email transformé en minuscule
     
     $query = "SELECT * FROM users WHERE login=? and password=? limit 1";
     $stmt = $conn->prepare($query);
     $stmt->execute(array($email,$password));
     $data = $stmt->fetch();
     $row = $stmt->rowCount();

     // Si > à 0 alors l'utilisateur existe
     
     if($row > 0)
     {
                 if($password == $data['password'])
                 {
                     
                     $_SESSION['email'] = $email ;
                     $_SESSION['name'] = $data['name'] ;
                     $_SESSION['last name'] = $data['last name'] ;
                     $_SESSION['address'] = $data['address'] ;
                     $_SESSION['phone'] = $data['phone'] ;
                     $_SESSION['card number'] = $data['card number'];
                     header('Location: ./my-account.php');
                     
                 }
     }
}

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="shortcut icon" href="https://www.insa-centrevaldeloire.fr/sites/default/files/favicon_0.ico" type="image/vnd.microsoft.icon" />
    <!-- MDB -->
    <title>Log In</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans&family=Vollkorn:ital,wght@0,600;1,500&display=swap");
         :root {
            --pure-white: #fff;
            --black: #171613;
            --light-black: #171613de;
            --light-grey: #c7c7c7;
            --grey: #949493;
            --hover-white: rgba(255, 255, 255, 0.099);
            --background-carousel: linear-gradient(#28313b, #8e9399);
            --carousel-bottom: #485461;
            --type-body: Open Sans, Helvetica, Arial, sans-serif;
        }
        
        body {
            font-family: var(--type-body);
            background-color: var(--light-black);
            border: none;
            padding: 0;
            margin: 0;
        }
        
        .background-image {
            background-image: url(./assets/car-model.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        @media(max-width: 991px) {
            .background-image {
                margin: 0;
                padding: 0;
                background-image: none;
                background-color: var(--pure-white);
            }
        }
    </style>
</head>

<body>
    <section class="pt-5">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col-xl-10 border-0 ">
                    <div class="card rounded-3 text-black ">
                        <div class="row g-0 ">
                            <div class="col-lg-6 ">
                                <div class="card-body p-md-5 mx-md-4 ">
                                    <div class="text-center ">
                                        <h4 class="mt-1 mb-5 pb-1 fw-bold">INSA CAR LOGIN</h4>
                                    </div>
                                    

                                    <form name = "fo"  action = "login-form.php" class="fw-bold" method=POST>
                                        <p class="h5 pb-3 ">Please login to your account</p>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="email" name = "username" id="username" class="form-control " placeholder="Email address" required="required"/>
                                        </div>

                                        <div class="form-outline mb-4 ">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" name = "password" id="password" class="form-control required="required"" />
                                        </div>

                                        <div class="d-flex flex-column text-center pt-1 mb-5 pb-1 ">
                                            <button class="btn btn-warning btn-block fa-lg mb-3 " name = "submit" type="submit">
                                              Log in
                                            </button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4 ">
                                            <p class="mb-0 me-2 ">Don't have an account?</p>
                                            <a href="./register-form.html">
                                                <button type="button" class="btn btn-outline-danger fw-bold ">
                                                <a href="register-form.php">Create New</a> 
                                              </button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center border-0 background-image ">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4 ">
                                    <!-- TODO: add caption -->
                                    <!-- <h4 class="mb-4 ">We are more than just a company</h4>
                    <p class="small mb-0 ">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>


