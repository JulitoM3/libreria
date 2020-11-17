<?php

include('../modelos/Logout.php');

$logout = new Logout();
session_start();
$logout->logout();

header('Location:/');