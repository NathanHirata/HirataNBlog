<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/css1.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <title>Johnny Harder</title>
    <div class="jumbotron" >
    <button type="button"><a  class="border" href="login.php" >Login</a></button> 
    <button type="button"><a class="border" href="controller/logout-user.php" >Logout</a></button>
    <p>Dont have an account? <a class="red" href="register.php" >Create One</a></p>
    <h1 class="green" >POSTS</h1> 
    </div>
    </head>
    <body class="blue" >
        
    </body>



<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    require_once(__DIR__ . "/view/header.php");
    if(authenticatUser()) {
    require_once(__DIR__ . "/view/navagation.php");
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-posts.php");
?>

