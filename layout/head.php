<?php
// Start session
session_start();

// Default language is Arabic
$language = "ar";

// Check if language is set in the query parameter
if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
    $_SESSION['language'] = $language; // Store language in session
}

// Include language file
if ($language == "ar") {
    include('lang/ar.php');
    $cls = "ar";
} else {
    include('lang/en.php');
    $cls = '';
}
?>



<!DOCTYPE html>


<html lang="en"  >
<head>
<!-- Meta Data -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Alsaeed Trad</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Stlylesheet -->
<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="./assets/css/font-awesome/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="./assets/css/no-ui-slider/jquery.nouislider.css" type="text/css" />

<!-- Skin Color -->
<link rel="stylesheet" href="./assets/css/colors/green.css" id="color-skins"/>
</head>
