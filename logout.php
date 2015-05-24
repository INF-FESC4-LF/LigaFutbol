<?php
    session_start();
    session_destroy();
    header('location:modificaciones.php');
?>
