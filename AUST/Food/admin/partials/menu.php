<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kacchi LAB</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <!-- Menu Section Starts -->
    <div class="header">
        <div class="container">
            <!-- Navbar Section Start -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" href="index.php">Home</a>
                            <a class="nav-link" href="manage-admin.php">Admin</a>
                            <a class="nav-link" href="manage-category.php">Category</a>
                            <a class="nav-link" href="manage-food.php">Food</a>
                            <a class="nav-link" href="manage-order.php">Order</a>
                            <a class="nav-link" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar Section End -->
        </div>
    </div>
    <!-- Menu Section Ends -->