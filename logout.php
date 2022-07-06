<?php

//Removing and destroying session ...
session_start();

unset($_SESSION['data']);

session_destroy();

header("Location: index.php");

?>