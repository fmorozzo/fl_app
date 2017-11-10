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
    <link href="css/mdb.css" rel="stylesheet">
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
            <div class="col-12 col-lg-3">
                <div class="fl-status-sidebar row">

                    <div class="col-12">
                        <div class="fl-status-vendor fl-bg-main">
                            <div class="fl-status-icon">
                                <img class="fl-img" src="img/svg/icon/dry_cleaning.svg" alt="icon service dry cleaning">
                            </div>
                            <h4 class="fl-status-vendor-title">Dry Cleaning</h4>
                        </div>
                    </div>

                    <div class="col-3 col-lg-12">
                        <div class="fl-status fl-done">
                            <div class="fl-status-icon">
                                <?php include 'includes/svg/icon/status/booking.svg' ?>
                                <?php include 'includes/svg/icon/status/booked.svg' ?>
                            </div>
                            <div class="fl-status-state">
                                <h5 class="fl-status-title">Booking info</h5>
                                <p class="fl-status-info"><strong>Espace Bascule, Uccle</strong><br/> Chaus&eacute;e de Waterloo 715<br/></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-12">
                        <div class="fl-status fl-active">
                            <div class="fl-status-icon">
                                <?php include 'includes/svg/icon/status/reviewing.svg' ?>
                                <?php include 'includes/svg/icon/status/reviewed.svg' ?>
                            </div>
                            <div class="fl-status-state">
                                <h5 class="fl-status-title">Order details</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-12">
                        <div class="fl-status">
                            <div class="fl-status-icon">
                                <?php include 'includes/svg/icon/status/payment.svg' ?>
                                <?php include 'includes/svg/icon/status/paid.svg' ?>
                            </div>
                            <div class="fl-status-state">
                                <h5 class="fl-status-title">Payment</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-12">
                        <div class="fl-status">
                            <div class="fl-status-icon">
                                <?php include 'includes/svg/icon/status/completion.svg' ?>
                                <?php include 'includes/svg/icon/status/completed.svg' ?>
                            </div>
                            <div class="fl-status-state">
                                <h5 class="fl-status-title">Completion</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="fl-flow-content">

                    <div class="fl-flow-header">
                        <h5 class="fl-flow-header-title">Your order details</h5>

                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="md-form">
                                    <select class="mdb-select">
                                        <option value="" disabled selected>Type of cleaning</option>
                                        <option value="1">Dry cleaning</option>
                                        <option value="2">Laundry</option>
                                    </select>
                                    <!--                                    <label class="mdb-select-label">Blue select</label>-->
                                </div>

                                <div class="row">
                                    <div class="col-9">
                                        <div class="md-form">
                                            <select class="mdb-select">
                                            <option value="" disabled selected>Type of clothes</option>
                                            <option value="1">Bag of unsorted clothes <span class="text-right">tbc</span></option>
                                            <option value="2">Suit(2pcs) - 12€</option>
                                            <option value="2">Trousers- 8€</option>
                                            <option value="2">shirt - 6€</option>
                                            <option value="2">Jacket - 10€</option>
                                            <option value="2">Rock - 6€</option>
                                            <option value="2">Vest - 8€</option>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="md-form">
                                            <select class="mdb-select">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="md-form">
                                    <textarea type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
                                    <label for="form8">Your message</label>
                                </div>
                                <p class="text-right">
                                    <a class="fl-btn-add btn-outline-grayBtn btn btn-sm">add item +</a>
                                </p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="flow-summary">
                                    <h5 class="flo-summary-headline"></h5>
                                </div>
                            </div>

                            <div class="fl-flow-buttons">
                                <button class="btn btn-secondaryOfficial px-4">cancel</button>
                                <button class="btn btn-secondary px-4">continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/mdb.min.js"></script>
    <script src="js/vendor/mdb.modules/material-select.js"></script>
    <script src="js/fl/hide.js"></script>
</body>

</html>
