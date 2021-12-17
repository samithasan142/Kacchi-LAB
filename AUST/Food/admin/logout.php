<?php
    include('../config/constants.php');
    //Destory the Session
    session_destroy();
    header('location:'.SITEURL.'admin/login.php');

?>