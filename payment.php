<!DOCTYPE html> 
<html lang="fr"> 
        <head> 
                <meta charset="utf-8">
                <title>INSA CAR - Payment</title> 
                <link  rel="stylesheet" href="css/bootstrap.min.css">
                <link  rel="stylesheet" href="css/style_inner_payment.css">
        </head> 
        <body> 
        <div class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-md sticky-to navbar-light bg-light pt-1">
        <a class="navbar-brand" href="index" data-target="index:not(.show)" data-toggle="collapse" data-parent="#page-content">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="catalogue" data-target="#page2:not(.show)" data-toggle="collapse">Catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login" data-target="#page3:not(.show)" data-toggle="collapse">Account</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#modalAbout" data-toggle="modal">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="page-content" class="container-fluid py-3 overflowauto">
        <div class="position-">
            <div id="home" class="collapse show" data-parent="#page-content">
                <div class="row h-100">
                    <aside class="col-md-3">
                        <div class="mt-4 mb-3 pt-4 sticky-top" id="sidemenu">
                            <div class="pt-1">
                                <ul class="nav nav-pills flex-md-column flex-row justify-content-between bg-light">
                                    <li class="nav-item"><a href="#sec1" class="nav-link active">Information</a></li>
                                    <li class="nav-item"><a href="#sec2" class="nav-link">Rent/Price</a></li>
                                    <li class="nav-item"><a href="#sec3" class="nav-link">Payment</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <main class="col py-5">
                        <div class="row">
                            <div class="col">
                                <ul class="nav nav-tabs small" role="tablist">
                                    <li class="nav-item"><a class="nav-link text-uppercase active" data-toggle="tab" href="#tab1" role="tab">Selected Car</a></li>
                                </ul>
                                <div class="tab-content py-3">
                                    <div class="tab-pane active" id="tab1" role="tabpanel">
                                        <p class="lead text-center mb-3">INSACAR - CAR SPECS</p>
                                        <div class="anchor" id="sec1"></div>
                                        <h4>Information</h4>
                                        <p>ICI RECUPERER LE TEXTE DE DESCRIPTION DU VEHICULE CHOISI (DEPUIS DB)</p>
                                        <div class="anchor" id="sec2"></div>
                                        <h4>Rent/Price</h4>
                                        <p>BOUTON/TEXT INPUT POUR SAVOIR COMBIEN DE TEMPS LOUER LA VOITURE</p>
                                        <hr>
                                        <div class="anchor" id="sec3"></div>
                                        <h4>Payment</h4>
                                        <p>INITIALISER LE PAYEMENT</p>
                                        <hr>
                                    </div>
                        </main>
    <footer class="container-fluid bg-dark text-white mt-auto py-3">
        <div>SOCIAL : @INSACAR (Available on Twitter, Facebook, Instagram)</div>
    </footer>
    <div id="modalAbout" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="myModalLabel">About</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
        </body> 
</html> 




<!--
                <div class="container-fluid blackINSA">
                <br/>
                        <a href="index">HOMEPAGE</a>
                        <br/><br/>
                        <div class="container redINSA">
                                <div class="row"> 
                                        <article class="col-md-6">
                                                <h1>Une magnifique voiture</h1>
                                                <p> Ceci est le texte descriptif disponible dans la database </p>
                                        </article>      
                                        <article class="col-md-6">
                                        
                                        </article> 
                                </div>
                        </div>
                </div>
-->