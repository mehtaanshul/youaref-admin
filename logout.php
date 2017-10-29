<?php
 session_start(); 
$_SESSION = array();
            $url = "login.php";
            ob_start();
            header('Location: '.$url);
            ob_end_flush();
            die();

            ?>