<?php
        require_once 'connect.php';
        session_destroy();
        header("Location: user.php");
?>
