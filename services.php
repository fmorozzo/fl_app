<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Facility Lockers</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:light,normal,bold|Raleway:light,normal,bold" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>
<nav class="fl-primary-nav navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="fl-brand-logo">
        <?php include 'includes/svg/logo/darkBG.svg';?></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse align-self-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">How it works</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <!-- Example split danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> My Account
  </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button">Action</button>
                    <button class="dropdown-item" type="button">Another action</button>
                    <button class="dropdown-item" type="button">Something else here</button>
                </div>
            </div>
        </div>
    </div>
</nav>
<section class="fl-section fl-section-services">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9 mx-auto text-center">
                <h1 class="fl-slogan">Do not waste your time. Let’s <em>facility lockers</em> do the job for you!</h1>
            </div>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Espace Bascule
            </button>
            <div class="dropdown-menu">
                <button class="dropdown-item" type="button">Tour Madou</button>
                <button class="dropdown-item" type="button">City 2</button>
                <button class="dropdown-item" type="button">Tour &amp; Taxi</button>
                <div class="dropdown-divider"></div>
                <button class="btn btn-secondary mx-5 btn-sm" href="#">add location</button>
            </div>
        </div>
        <div class="card-group">
            <div class="card" data-toggle="modal" data-target="#modalInfo">
                <div class="fl-card-img-wrapper fl-bg-secondary">
                    <img class="fl-card-img" src="img/svg/icon/dry_cleaning.svg" alt="icon service dry cleaning">
                    <h4 class="fl-card-title">Dry Cleaning</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">With Facility Lockers, no need to rush! Drop &amp; pick your clothes at your working place.</p>
                    <button class="btn btn-secondary" data-toggle="modal" data-target="#modalInfo">info</button>
                </div>
            </div>
            <div class="card" data-toggle="modal" data-target="#modalInfo">
                <div class="fl-card-img-wrapper fl-bg-main">
                    <img class="fl-card-img" src="img/svg/icon/ironing.svg" alt="icon service ironing">
                    <h4 class="fl-card-title">Ironing</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">With Facility Lockers, no need to rush! Drop &amp; pick your clothes at your working place.</p>
                    <button class="btn btn-main" data-toggle="modal" data-target="#modalInfo">info</button>
                </div>
            </div>
            <div class="card" data-toggle="modal" data-target="#modalInfo">
                <div class="fl-card-img-wrapper fl-bg-primary">
                    <img class="fl-card-img" src="img/svg/icon/sewing.svg" alt="icon service sewing">
                    <h4 class="fl-card-title">sewing</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">With Facility Lockers, no need to rush! Drop &amp; pick your clothes at your working place.</p>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalInfo">info</button>
                </div>
            </div>
            <div class="card" data-toggle="modal" data-target="#modalInfo">
                <div class="fl-card-img-wrapper fl-bg-secondaryLight">
                    <img class="fl-card-img" src="img/svg/icon/shoe_repair.svg" alt="icon service shoe repair">
                    <h4 class="fl-card-title">shoe repair</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">With Facility Lockers, no need to rush! Drop &amp; pick your clothes at your working place.</p>
                    <button class="btn btn-secondaryLight" data-toggle="modal" data-target="#modalInfo">info</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fl-section fl-how fl-section-how">
    <div class="container">
        <h3 class="fl-section-heading fl-h3">How does it work?</h3>
        <br>
        <div class="fl-how-diagram">
            <div class="fl-buttons">
                <button type="button" class="btn fl-toggle-btn active btn-secondary">Delivery</button>
                <button type="button" class="btn fl-toggle-btn btn-secondary">Services</button>
            </div>
            <div class="row fl-parcel-delivery active">

                <div class="col-6  col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <img class="fl-step img-fluid" src="img/svg/picto/click&collect/01.svg" alt="step 1">
                    <div class="fl-step-number">1</div>
                    <p class="fl-description">Commandez en ligne sur un site e-commerce (Amazon, Zalando...).</p>
                </div>
                <!-- /.col -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <img class="fl-step img-fluid" src="img/svg/picto/click&collect/02.svg" alt="step 2">
                    <div class="fl-step-number">2</div>
                    <p class="fl-description">Ecrivez : Facility Lockers + votre nom ainsi que l’adresse du FacilityLockers
                    </p>
                </div>
                <!-- /.col -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <img class="fl-step img-fluid" src="img/svg/picto/click&collect/03.svg" alt="step 3">
                    <div class="fl-step-number">3</div>
                    <p class="fl-description">Votre colis est livr&eacute; dans le FacilityLockers</p>
                </div>
                <!-- /.col -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <img class="fl-step img-fluid" src="img/svg/picto/click&collect/04.svg" alt="step 4">
                    <div class="fl-step-number">4</div>
                    <p class="fl-description">R&eacute;cup&eacute;rez votre colis via l’&eacute;cran du FacilityLockers gr&acirc;ce au code d’acc&egrave;s envoy&eacute; par email/SMS.</p>
                </div>
                <!-- /.col -->
            </div>
            <div class="row fl-use-service">

                <div class="col-6  col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <img class="fl-step img-fluid" src="img/svg/picto/service/01.svg" alt="step 1">
                    <div class="fl-step-number">1</div>
                    <p class="fl-description">S&eacute;lectionnez un service (nettoyage à sec, repassage, ...).</p>
                </div>
                <!-- /.col -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <img class="fl-step img-fluid" src="img/svg/picto/service/02.svg" alt="step 2">
                    <div class="fl-step-number">2</div>
                    <p class="fl-description">Identifiez-vous avec vos informations personnelles D&eacute;posez votre ou vos articles dans le locker selectionn&eacute;.
                    </p>
                </div>
                <!-- /.col -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <img class="fl-step img-fluid" src="img/svg/picto/service/03.svg" alt="step 3">
                    <div class="fl-step-number">3</div>
                    <p class="fl-description">Suivez l’&eacute;tat de votre demande de service et proc&eacute;dez au paiement en ligne via votre espace personnel.</p>
                </div>
                <!-- /.col -->

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <img class="fl-step img-fluid" src="img/svg/picto/service/04.svg" alt="step 4">
                    <div class="fl-step-number">4</div>
                    <p class="fl-description">Vous recevrez votre code d’acc&egrave;s par email/SMS d&egrave;s que votre commande sera pr&ecirc;te.
                    </p>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- .fl-how-diagram -->
        <br>
        <div class="row justify-content-center">
            <div class="col-2 col-sm-2 col-md-1">
                <img src="img/svg/icon/info.svg" alt="info icon" class="img-fluid">
            </div>
            <div class="col-6 col-sm-6 col-md-5">
                <p class="fl-subtitle text-left mb-auto">
                    Pour commencer &agrave; utiliser nos services, il vous suffit de cr&eacute;er votre compte gratuitement !
                </p>
            </div>
            <div class="col-4 col-sm-4 col-md-2 text-right">
                <button class="btn btn-primary fl-btn-call-to-action">Sign up</button>
            </div>
            <!-- .col -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>

<div class="fixed-bottom">

    <nav class="fl-quick-access-nav navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <span class="fl-nav-title">Quick Access <br>to my services</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarQuickAccessContent" aria-controls="navbarQuickAccessContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

            <div class="collapse navbar-collapse align-self-end" id="navbarQuickAccessContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link fl-btn-qa-drycleaning btn-secondary" href="dry_cleaning01.php">Dry Cleaning</a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link fl-btn-qa-ironing btn-secondary" href="#">Ironing</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link fl-btn-qa-itrepair btn-secondary" href="#">IT Repair</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link fl-btn-qa-sewing btn-secondary" href="#">Sewing</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link fl-btn-qa-shoerepair btn-secondary" href="#">Shoe Repair</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modalInfo">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header fl-bg-secondary">
                <div class="fl-modal-img-wrapper">
                    <img src="img/svg/icon/dry_cleaning.svg" class="fl-modal-img" />
                    <h5 class="fl-modal-title">Dry Cleaning</h5>
                </div>
            </div>
            <div class="modal-body">
                <p>With <strong>Facility Lockers</strong>, no need to rush! Drop &amp; pick your clothes at your working place.</p>
                <div class="fl-how-diagram">
                    <div class="row fl-use-service active">

                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <img class="fl-step img-fluid" src="img/svg/picto/service/01.svg" alt="step 1">
                            <div class="fl-step-number">1</div>
                            <p class="fl-description">S&eacute;lectionnez un service (nettoyage à sec, repassage, ...).</p>
                        </div>
                        <!-- /.col -->

                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <img class="fl-step img-fluid" src="img/svg/picto/service/02.svg" alt="step 2">
                            <div class="fl-step-number">2</div>
                            <p class="fl-description">Identifiez-vous avec vos informations personnelles D&eacute;posez votre ou vos articles dans le locker selectionn&eacute;.
                            </p>
                        </div>
                        <!-- /.col -->

                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <img class="fl-step img-fluid" src="img/svg/picto/service/03.svg" alt="step 3">
                            <div class="fl-step-number">3</div>
                            <p class="fl-description">Suivez l’&eacute;tat de votre demande de service et proc&eacute;dez au paiement en ligne via votre espace personnel.</p>
                        </div>
                        <!-- /.col -->

                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <img class="fl-step img-fluid" src="img/svg/picto/service/04.svg" alt="step 4">
                            <div class="fl-step-number">4</div>
                            <p class="fl-description">Vous recevrez votre code d’acc&egrave;s par email/SMS d&egrave;s que votre commande sera pr&ecirc;te.
                            </p>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-secondaryOfficial px-4" data-dismiss="modal">cancel</button>
                <a href="dry_cleaning01.php" class="btn btn-secondary px-4">book</a>
            </div>
        </div>
    </div>
</div>

<body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=" js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/fl/jquery.alterclass.js"></script>
    <script src="js/fl/hide.js"></script>
</body>

</html>
