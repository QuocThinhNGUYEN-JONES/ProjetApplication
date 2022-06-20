<!DOCTYPE html> 
<html lang="fr"> 
        <head> 
                <title>INSA CAR - Payment</title>
                <?php require("header.html") ?>
                <link  rel="stylesheet" href="css/style_inner_payment.css">
                <script  src="https://js.stripe.com/v3/"></script>
                <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>

                <script type="text/javascript">
                function daydiff()
                {
                    var t1=document.getElementById('retrieve').value;
                    t1=t1.split('-');
                    dt_t1=new Date(t1[0],t1[1],t1[2]);
                    dt_t1_tm=dt_t1.getTime();
                    var t2=document.getElementById('return').value;
                    t2=t2.split('-');
                    dt_t2=new Date(t2[0],t2[1],t2[2]);
                    dt_t2_tm=dt_t2.getTime();
                    var one_day = 24*60*60*1000;
                    return Math.abs((dt_t1_tm-dt_t2_tm)/one_day);
                }
                function price_calculator(daydifference,pph)
                {
                    var price = Math.ceil(daydifference*pph);
                    document.getElementById('display').innerHTML= price+"€" ;
                    document.getElementById('display').style.display = 'inline';
                    return price;
                }
                </script>
        </head> 
        <body> 
        <div class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-md sticky-to navbar-light bg-light pt-1">
        <a class="navbar-brand" href="index" data-target="index:not(.show)" data-toggle="collapse" data-parent="#page-content">Home</a>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="catalogue" data-target="#page2:not(.show)" data-toggle="collapse">Catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login" data-target="#page3:not(.show)" data-toggle="collapse">Account</a>
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
                                    <li class="nav-item"><a href="#info" class="nav-link active">Information</a></li>
                                    <li class="nav-item"><a href="#rent" class="nav-link">Rent/Price</a></li>
                                    <li class="nav-item"><a href="#payment" class="nav-link">Payment</a></li>
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
                                        <p class="lead text-center mb-3">INSACAR - CAR RENT</p>
                                        <div class="anchor" id="info"></div>
                                        <h4>Information</h4>
                                                <div class="col-md-4">
                                                <p>ICI RECUPERER LE TEXTE DE DESCRIPTION DU VEHICULE CHOISI (DEPUIS DB)</p>
                                                </div>  

                                                <div class="col-md-4" id="ads">
                                                <div class="card rounded">
                                                <div class="card-image">
                                                        <span class="card-notify-badge">Low KMS</span>
                                                        <span class="card-notify-year">2018</span>
                                                        <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262" alt="Alternate Text" />
                                                </div>
                                                <div class="card-image-overlay m-auto">
                                                        <span class="card-detail-badge">20€/jour</span>
                                                        <span class="card-detail-badge">Honda Accord LX</span>
                                                        <span class="card-detail-badge">13000 Kms</span>
                                                </div>
                                                <div class="card-body text-center">
                                                        <div class="ad-title m-auto">
                                                        <h5>Honda Accord LX</h5>
                                                        </div>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="anchor" id="rent"></div>
                                        <h4>Rent/Price</h4>
                                        <p>BOUTON/TEXT INPUT POUR SAVOIR COMBIEN DE TEMPS LOUER LA VOITURE</p>
                                        <hr>
                                        <div class="anchor" id="payment"></div>
                                        <h4>Payment</h4>
                                            <label for="retrieve">Retrieve date:</label>

                                            <input type="date" id="retrieve"  name="give" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"/>

                                            <label for="start">Return date:</label>

                                            <input type="date" id="return"  name="give" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"/>
                                        <br/>
                                        <br/>
                                        <p><a class="btn btn-primary btn-lg" id="btn" role="button" onclick="price_calculator(daydiff(),19.99)">GET THE PRICE</a></p>
                                        <br>
                                        <p>Total : <div id="display"></div>
                                        <br/><br/>
                                        <p><a class="btn btn-primary btn-lg" href="https://buy.stripe.com/test_fZe7t0ag639P2DSeUU" id="btn" role="button">PAY</a></p>
                                        <hr>
                                    </div>
                        </main>
        <?php require("footer.html") ?>
</div>
        </body> 
</html> 