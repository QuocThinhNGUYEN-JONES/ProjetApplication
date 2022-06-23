<?php
    if (isset($_POST['Deco']))
        {
            session_start(); //to ensure you are using same session
            session_destroy(); //destroy the session
            header("Location: ./landing-page.php"); //to redirect back to "index.php" after logging out
            exit();
        }
    logged_only();

    function logged_only(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if(!isset($_SESSION['email'])){
            header('Location: login-form-temp.php');
            exit();
        }
    }

    // function logged_only(){
    //     if(session_status() == PHP_SESSION_NONE){
    //         session_start();
    //     }
    //     if(!isset($_SESSION['email'])){
    //         header('Location: login-form.php');
    //         exit();
    //     }
    // }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://www.insa-centrevaldeloire.fr/sites/default/files/favicon_0.ico" type="image/vnd.microsoft.icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/account-paramter.css">
    <script src="https://kit.fontawesome.com/33e40bbd30.js" crossorigin="anonymous"></script>
    <title>INSA Car</title>
</head>

<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<div class="my-5">
				<h3>My Profile</h3>
				<hr>
			</div>
			<!-- Form START -->
			<form class="file-upload">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<h4 class="mb-4 mt-0">Information</h4>
								<!-- First Name -->
								<div class="col-md-6">
									<label class="form-label">First Name *</label>
									<input type="text" class="form-control" placeholder="<?php echo($_SESSION['name']);?>" aria-label="First name" value="" disabled>
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Last Name *</label>
									<input type="text" class="form-control" placeholder="<?php echo($_SESSION['last name']);?>" aria-label="Last name" value="" disabled>
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">Phone number *</label>
									<input type="text" class="form-control" placeholder="<?php echo($_SESSION['phone']);?>" aria-label="Phone number" value="" disabled>
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Student card *</label>
									<input type="text" class="form-control" placeholder="<?php echo($_SESSION['card number']);?>" aria-label="Phone number" value="" disabled>
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="email" class="form-label">Email *</label>
									<input type="email" class="form-control" id="email" placeholder="<?php echo($_SESSION['email']);?>" value="" disabled>
								</div>
								<!-- Skype -->
								<div class="col-md-6">
									<label class="form-label">Address</label>
									<input type="text" class="form-control" placeholder="<?php echo($_SESSION['address']);?>" aria-label="Address" value="" disabled>
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
					<!-- Upload profile -->
					<div class="col-xxl-4">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<div class="text-center">
									<!-- Image upload -->
									<div class="square position-relative display-2 mb-3">
										<i class="fas fa-fw fa-user position-absolute top-50 start-50 translate-middle text-secondary"></i>
									</div>
									<!-- Button -->
									<input type="file" id="customFile" name="file" hidden="">
									<label class="btn btn-success-soft btn-block" for="customFile">Upload</label>
									<button type="button" class="btn btn-danger-soft">Remove</button>
									<!-- Content -->
								</div>
							</div>
						</div>
					</div>
				</div> <!-- Row END -->


				<!-- button -->
				<div class="gap-3 d-md-flex justify-content-md-end text-center">
                    <form action="POST">
                    <button type="submit" class="btn btn-danger btn-lg" name="Deco">Disconnect profile</button>
                    </form>

					<button type="button" class="btn btn-primary btn-lg">Edit profile</button>
				</div>
			</form> <!-- Form END -->
		</div>
	</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/account-parameter.js"></script>
</body>

</html>