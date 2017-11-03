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
        <a class="navbar-brand" href="#"><img src="img/svg/logo/horizontal/white.svg" alt="Facility Lockers logo" class="fl-brand-logo"></a>
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
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
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
<section class="fl-section fl-panel fl-section-flow">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="fl-status-sidebar row">

                    <div class="col-3 col-sm-12">
                        <div class="fl-status-vendor fl-bg-main">
                            <div class="fl-status-icon">
                                <img class="fl-img" src="img/svg/icon/dry_cleaning.svg" alt="icon service dry cleaning">
                            </div>
                            <h4 class="fl-status-vendor-title">Dry Cleaning</h4>
                        </div>
                    </div>

                    <div class="col-3 col-sm-12">
                        <div class="fl-status fl-done">
                            <div class="fl-status-icon">
                                <?php include 'includes/svg/icon/circle/booking.svg' ?>
                            </div>
                            <div class="fl-status-state">
                                <h5 class="fl-status-title">Booking info :</h5>
                                <p class="fl-status-info"><strong>Espace Bascule, Uccle</strong><br/> Chaus&eacute;e de Waterloo 715<br/></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-12">
                        <div class="fl-status fl-active">
                            <div class="fl-status-icon">
                                <?php include 'includes/svg/icon/circle/booking.svg' ?>
                            </div>
                            <div class="fl-status-state">
                                <h5 class="fl-status-title">Order details :</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-12">
                        <div class="fl-status">
                            <div class="fl-status-icon">
                                <?php include 'includes/svg/icon/circle/booking.svg' ?>
                            </div>
                            <div class="fl-status-state">
                                <h5 class="fl-status-title">Payment :</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-sm-12">
                        <div class="fl-status">
                            <div class="fl-status-icon">
                                <?php include 'includes/svg/icon/circle/booking.svg' ?>
                            </div>
                            <div class="fl-status-state">
                                <h5 class="fl-status-title">Status :</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8">
                <div class="fl-flow-content">

                    <div class="fl-status-header">
                        <h5>Your order details</h5>

                    </div>
                    <form action="">

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>9
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
                        <button class="nav-link fl-btn-qa-drycleaning btn-secondary" href="#">Dry Cleaning</button>
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

<body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/fl/jquery.alterclass.js"></script>
    <script src="js/fl/hide.js"></script>
</body>

</html>
