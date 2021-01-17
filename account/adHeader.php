<?php
session_start();
error_reporting(0);
include("db.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>MY V Bike Rental - Admin</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/css/all-themes.css" rel="stylesheet" />

    <!-- icon -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<body class="theme-green">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Morphing Search  -->
    <!-- Top Bar -->
    <nav class="navbar clearHeader">
        <div class="col-12">
            <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="index.html">MY V Bike Rental</a> </div>
            <ul class="nav navbar-nav navbar-right">
                <!-- Notifications -->
                <li>
                    <a data-placement="bottom" title="Full Screen" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!--Admin Menu -->
            <div class="menu">
                <ul class="list" style="overflow: hidden; width: auto; height: calc(-184px + 100vh);">
                    <?php
                    if (isset($_SESSION['adminID'])) {
                    ?>
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active open">
                            <a href="adminAccount.php"><i class="fas fa-home"></i><span>Dashboard</span></a>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="fas fa-user-circle"></i><span>Admins</span> </a>
                            <ul class="ml-menu">
                                <li><a href="adminProfile.php">Admin Profile</a></li>
                                <li><a href="adminChangePassword.php">Change Password</a></li>
                                <li><a href="admin.php">Add Admin</a></li>
                                <li><a href="viewAdmin.php">View Admin</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="fas fa-calendar-check"></i><span>Reservations</span> </a>
                            <ul class="ml-menu">
                                <li><a href="reservation.php">New Reservation</a></li>
                                <li><a href="viewReservationAdmin.php">View Reservation</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="fas fa-users"></i><span>Users</span> </a>
                            <ul class="ml-menu">
                                <li><a href="users.php">Add User</a></li>
                                <li><a href="viewUsers.php">View User Records</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="fas fa-motorcycle"></i><span>Bikes</span> </a>
                            <ul class="ml-menu">
                                <li><a href="addBikes.php">Add Bikes</a></li>
                                <li><a href="viewBikes.php">View Bikes</a></li>
                            </ul>
                        </li>
                    <?php } else if (isset($_SESSION['userID'])) { ?>
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active open"><a href="userAccount.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>

                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="fas fa-user-circle"></i><span>Profile</span> </a>
                            <ul class="ml-menu">
                                <li><a href="userProfile.php">View Profile</a></li>
                                <li><a href="userChangePassword.php">Change Password</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="fas fa-calendar-check"></i><span>Reservations</span> </a>
                            <ul class="ml-menu">
                                <li><a href="reservation.php">New Reservation</a></li>
                                <li><a href="viewReservation.php">Reservations History</a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </aside>
        <!-- #END# Left Sidebar -->

    </section>
    <section class="content home">