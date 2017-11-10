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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard</a>
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
<section class="fl-section fl-panel fl-section-notifications">
    <div class="container">
        <h4 class="fl-panel-title">Notifications</h4>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card fl-card-priority">
                    <div class="card-body">
                        <h5 class="card-title">Pending Payment</h5>
                        <div class="row">
                            <div class="col-6">
                                <p class="card-text">Please fulfill the payment. (45€)
                                    <a href="#" class="fl-link">order details</a></p>
                                <button class="btn btn-primary btn-sm">pay now</button>
                            </div>
                            <div class="col-6">
                                <img src="img/svg/icon/circle/dry_cleaning.svg" alt="icon service dry cleaning">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <div class="row">
                            <div class="col-6">
                                <p class="card-text">Complete your profile to get more points.</p>
                                <button class="btn btn-primary btn-sm">profile</button>
                            </div>
                            <div class="col-6">
                                <figure class="chart-one animate">
                                    <svg role="img" xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-background"/>
                                    <circle class="circle-foreground" fill="url('#linearGradient-1')"/>
                                    <defs>
                                        <linearGradient x1="9.5612282%" y1="63.4538517%" x2="42.2374637%" y2="100%" id="linearGradient-1">
                                            <stop stop-color="#003A6F" offset="0%"></stop>
                                            <stop stop-color="#00C2C2" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                    <figcaption></figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Points</h5>
                        <!--                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
                        <div class="row">
                            <div class="col-6">
                                <p class="card-text">You get points each time you use the app.
                                </p>
                                <button class="btn btn-primary btn-sm">profile</button>
                            </div>
                            <div class="col-6">
                                <img src="img/svg/icon/pickup_circle.svg" class="fl-notif-img" alt="pickup" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <!--                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
                        <div class="row">
                            <div class="col-6">
                                <p class="card-text">Complete your profile to get more points.</p>
                                <button class="btn btn-primary btn-sm">profile</button>
                            </div>
                            <div class="col-6">
                                <img src="img/svg/icon/pickup_circle.svg" class="fl-notif-img" alt="pickup" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <!--                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
                        <div class="row">
                            <div class="col-6">
                                <p class="card-text">Complete your profile to get more points.</p>
                                <button class="btn btn-primary btn-sm">profile</button>
                            </div>
                            <div class="col-6">
                                <figure class="chart-one animate">
                                    <svg role="img" xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-background"/>
                                    <circle class="circle-foreground" fill="url('#linearGradient-1')"/>
                                    <defs>
                                        <linearGradient x1="9.5612282%" y1="63.4538517%" x2="42.2374637%" y2="100%" id="linearGradient-1">
                                            <stop stop-color="#003A6F" offset="0%"></stop>
                                            <stop stop-color="#00C2C2" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                    <figcaption></figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="fl-section fl-panel fl-section-processes">
    <div class="container">
        <h4 class="fl-panel-title">Ongoing processes</h4>

        <div class="row">

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card fl-card-priority">
                    <div class="card-body">
                        <h5 class="card-title">DPD<small> / pending payment</small><i class="icon-view"></i></h5>
                        <p class="card-main-message">You have one item waiting for you!</p>
                        <div class="row">
                            <div class="col-6">
                                <label>Receptor :</label>
                                <p>Louis Michel</p>
                                <label>Payment :</label>
                                <p>23/11/17</p>
                            </div>
                            <div class="col-6">
                                <label>Location :</label>
                                <p>Espace Bascule</p>
                            </div>
                            <div class="col-12 text-center">

                                <button class="btn btn-primary px-5">pay 15€</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-expanded">
                        <h5 class="card-title">Your order status</h5>
                        <div class="row text-center">
                            <div class="col-6 col-md-3 fl-status-done">
                                <?php include 'includes/svg/icon/booked.svg' ?>
                                <p class="fl-status-title">booked</p>
                                <p>Well done ! A Locker is waiting for you. Log in to the locker’s terminal to open it.</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <?php include 'includes/svg/icon/payment.svg' ?>
                                <p class="fl-status-title">pending payment</p>
                                <p>Well done ! A Locker is waiting for you. Log in to the locker’s terminal to open it.</p>
                            </div>
                            <div class="col-6 col-md-3">
                                <?php include 'includes/svg/icon/delivery.svg' ?>
                                <p class="fl-status-title">Delivery</p>
                                <p>Well done ! A Locker is waiting for you. Log in to the locker’s terminal to open it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">washio<small> / dropped</small><i class="icon-view"></i></h5>
                        <div class="row">
                            <div class="col-6">
                                <label>Order :</label>
                                <p>5 pieces</p>
                                <label>Date :</label>
                                <p>21/11/17</p>
                                <figure class="chart-mini animate">
                                    <svg role="img" xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-background"/>
                                    <circle class="circle-foreground" fill="url('#linearGradient-1')"/>
                                    <defs>
                                        <linearGradient x1="9.5612282%" y1="63.4538517%" x2="42.2374637%" y2="100%" id="linearGradient-1">
                                            <stop stop-color="#003A6F" offset="0%"></stop>
                                            <stop stop-color="#00C2C2" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                    <figcaption></figcaption>
                                </figure>
                            </div>
                            <div class="col-6">
                                <label>Location :</label>
                                <p>Espace Bascule</p>
                                <label>Time :</label>
                                <p>6-12AM</p>
                                <span class="fl-card-price">52<small>&euro;</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-expanded">
                        <h5 class="card-title">Your order status</h5>
                        <div class="row text-center">
                            <div class="col-6 col-md-3 fl-status-done">
                                <?php include 'includes/svg/icon/booked.svg' ?>
                                <p class="fl-status-title">booked</p>
                                <p>Well done ! A Locker is waiting for you. Log in to the locker’s terminal to open it.</p>
                            </div>
                            <div class="col-6 col-md-3 fl-status-done">
                                <?php include 'includes/svg/icon/dropped.svg' ?>
                                <p class="fl-status-title">dropped</p>
                                <p>Drop your clothes in the locker.</p>
                            </div>
                            <div class="col-6 col-md-3">

                                <?php include 'includes/svg/icon/review.svg' ?>

                                <p class="fl-status-title">review</p>
                                <p>washio will review your order and send you a text message with a link to approve the final amount.</p>
                            </div>
                            <!--
                        <div class="col-6 col-md-3">

                            <?php include 'includes/svg/icon/payment.svg' ?>

                            <p class="fl-status-title">payment</p>
                            <p>At that stage you will need to pay through the Falicity Lockers platform.</p>
                        </div>-->
                            <div class="col-6 col-md-3">

                                <?php include 'includes/svg/icon/delivery.svg' ?>

                                <p class="fl-status-title">delivery</p>
                                <p>You will receive a message once your clothes are ready for pickup.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">returns<small> / booked</small><i class="icon-view"></i></h5>
                        <p class="card-main-message">You have booked a locker to return an item.</p>
                        <div class="row">
                            <div class="col-6">
                                <label>Box size :</label>
                                <p>medium (B)<br>385x350x135</p>
                                <label>Date :</label>
                                <p>19/11/17</p>
                            </div>
                            <div class="col-6">
                                <label>Location :</label>
                                <p>Espace Bascule</p>
                                <label>Time :</label>
                                <p>6-12AM</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-expanded">
                        <h5 class="card-title">Your order status</h5>
                        <div class="row text-center">
                            <div class="col-6 col-md-3 fl-status-done">
                                <?php include 'includes/svg/icon/booked.svg' ?>
                                <p class="fl-status-title">booked</p>
                                <p>Well done ! A Locker is waiting for you. Log in to the locker’s terminal to open it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="fl-section fl-panel">
    <div class="container">
        <h4 class="fl-panel-title">List of activities</h4>

        <table class="table table-hover table-striped table-sm table-responsive table-bordered table-centered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">order ID</th>
                    <th scope="col">Service</th>
                    <th scope="col">locker</th>
                    <th scope="col">Location</th>
                    <th scope="col">info</th>
                    <th scope="col">dropoff</th>
                    <th scope="col">pickup</th>
                    <th scope="col">status</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>1242376</td>
                    <td>washio</td>
                    <td>4</td>
                    <td>Tour Madou</td>
                    <td>Pair of Trousers</td>
                    <td>22/12/16</td>
                    <td>27/12/16</td>
                    <td>locker ready</td>
                    <td><a href="#" class="fl-table-action fl-action-details"></a><a href="#" class="fl-table-action fl-action-edit"></a><a href="#" class="fl-table-action fl-action-remove"></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1242376</td>
                    <td>washio</td>
                    <td>4</td>
                    <td>Tour Madou</td>
                    <td>Pair of Trousers</td>
                    <td>22/12/16</td>
                    <td>27/12/16</td>
                    <td>locker ready</td>
                    <td><a href="#" class="fl-table-action fl-action-details"></a><a href="#" class="fl-table-action fl-action-edit"></a><a href="#" class="fl-table-action fl-action-remove"></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1242376</td>
                    <td>washio</td>
                    <td>4</td>
                    <td>Tour Madou</td>
                    <td>Pair of Trousers</td>
                    <td>22/12/16</td>
                    <td>27/12/16</td>
                    <td>locker ready</td>
                    <td><a href="#" class="fl-table-action fl-action-details"></a><a href="#" class="fl-table-action fl-action-edit"></a><a href="#" class="fl-table-action fl-action-remove"></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1242376</td>
                    <td>washio</td>
                    <td>4</td>
                    <td>Tour Madou</td>
                    <td>Pair of Trousers</td>
                    <td>22/12/16</td>
                    <td>27/12/16</td>
                    <td>locker ready</td>
                    <td><a href="#" class="fl-table-action fl-action-details"></a><a href="#" class="fl-table-action fl-action-edit"></a><a href="#" class="fl-table-action fl-action-remove"></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1242376</td>
                    <td>washio</td>
                    <td>4</td>
                    <td>Tour Madou</td>
                    <td>Pair of Trousers</td>
                    <td>22/12/16</td>
                    <td>27/12/16</td>
                    <td>locker ready</td>
                    <td><a href="#" class="fl-table-action fl-action-details"></a><a href="#" class="fl-table-action fl-action-edit"></a><a href="#" class="fl-table-action fl-action-remove"></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1242376</td>
                    <td>washio</td>
                    <td>4</td>
                    <td>Tour Madou</td>
                    <td>Pair of Trousers</td>
                    <td>22/12/16</td>
                    <td>27/12/16</td>
                    <td>locker ready</td>
                    <td><a href="#" class="fl-table-action fl-action-details"></a><a href="#" class="fl-table-action fl-action-edit"></a><a href="#" class="fl-table-action fl-action-remove"></a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1242376</td>
                    <td>washio</td>
                    <td>4</td>
                    <td>Tour Madou</td>
                    <td>Pair of Trousers</td>
                    <td>22/12/16</td>
                    <td>27/12/16</td>
                    <td>locker ready</td>
                    <td><a href="#" class="fl-table-action fl-action-details"></a><a href="#" class="fl-table-action fl-action-edit"></a><a href="#" class="fl-table-action fl-action-remove"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
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
