<?php require_once "./includes/header.php";?>
<?php

$session->logout();
redirect("/admin/login.php");
