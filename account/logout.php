<?php
session_start();

if (isset($_SESSION['adminID'])) {
    session_destroy();
    echo "<script>window.location='loginAdmin.php';</script>";
} else {
    session_destroy();
    echo "<script>window.location='login.php';</script>";
}
