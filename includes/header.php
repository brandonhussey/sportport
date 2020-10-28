<?php
    require_once('php/database.php');
    require_once('php/dto/user.php');
    session_start();
    if(isset($_SESSION['loggedin'])){
        $loggedin = true;
        $firstName = $_SESSION['firstName'];
        $lastName = $_SESSION['lastName'];
        $dob = $_SESSION['dob'];
    }
    else{
        $loggedin = false;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ahmed Ghandar, Matt Smith, Brandon Hussey, Ian Dawson, Mack Preston, Mohammed Al-Ghamdi">

    <title>Sport Port</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

</head>
<body id="page-top">
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <img class='logo' src='img/anchor.png' alt='Sport Port Logo - Anchor'>
            <a class="navbar-brand js-scroll-trigger" href="index.php">Sport Port</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php#sports">Offered Sports</a>
                    </li>
                    <?php
                        if($loggedin){
                            echo '<li class="nav-item mx-0 mx-lg-1">
                                       <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="profile.php">Profile</a>
                                  </li>';
                            echo '<li class="nav-item mx-0 mx-lg-1">
                                       <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="php/logout.php">Sign Out</a>
                                  </li>';
                        }
                        else{
                            echo '<li class="nav-item mx-0 mx-lg-1">
                                       <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="loginregister.php">Login / Sign Up</a>
                                  </li>';
                        }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
