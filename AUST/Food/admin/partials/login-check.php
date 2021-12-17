<?php 

    //AUthorization - Access COntrol
    //CHeck whether the user is logged in or not
    if(!isset($_SESSION['user']))
    {
        //User is not logged in
        //Redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>অনুগ্রহ করে আগে লগইন করুন </div>";
        //Redirect to Login Page
        header('location:'.SITEURL.'admin/login.php');
    }

?>