<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kacchi LAB</title>
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
            <a href="<?php echo SITEURL; ?>index.php" title="Logo">
                    <img src="images/logo-style-5.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">হোম</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">ক্যাটাগরি</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">খাবার সমূহ</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>aboutus.php">আমাদের সম্পর্কে</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>contactUs.php">যোগাযোগ</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->