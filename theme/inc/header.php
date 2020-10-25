<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>PaccoSpedito</title>
    <link rel='stylesheet' href='css/bootstrap.css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="material-icons">view_week</i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="dashboard.php">
                        <img src="img/logo.png" width="100%">
                    </a>
                    <div id="close-sidebar">
                        <i class="material-icons">close</i>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="notification.php">
                                <i class="material-icons md-24">apps</i>
                                <span>notification<span class="badge badge-light">4</span></span>
                            </a>
                        </li>
                        <li>
                            <a href="confirmation.php">
                                <i class="material-icons md-24">apps</i>
                                <span>parcel status</span>
                            </a>
                        </li>
                        <li>
                            <a href="payment.php">
                                <i class="material-icons md-24">apps</i>
                                <span>payment status</span>
                            </a>
                        </li>
                        <li>
                            <a href="customer.php">
                                <i class="material-icons md-24">apps</i>
                                <span>Customers</span>
                            </a>
                        </li>
                        <li>
                            <a href="blocked-customers.php">
                                <i class="material-icons md-24">apps</i>
                                <span>blocked customers</span>
                            </a>
                        </li>
                        <li>
                            <a href="users.php">
                                <i class="material-icons md-24">apps</i>
                                <span>Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <div class="dashboard-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header-right">
                            <div class="navbar-profile">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        John Doe
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="profile-edit.php">My Profile</a>
                                        <a class="dropdown-item" href="change-password.php">Chnage Password</a>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </div>
                                </div>
                                <img class="profile-pic" src="img/profile.jpg" alt="profile pic">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>