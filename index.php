<?php
session_start();
require './database.php';



if (isset($_POST) && !empty($_POST)) {
        if (isset($_POST['register']) && !empty($_POST['register'])) {
                # code...
        } else if (isset($_POST['login']) && !empty($_POST['login'])) {
                # code...
        } else {
                # code...
        }
} else {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . $_SERVER['REQUEST_URI'] . 'acceuil.php');
}
