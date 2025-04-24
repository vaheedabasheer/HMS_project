<?php
session_start();
 include 'connection.php';
 session_destroy();
 session_unset();
 header("location:login.php");

?>