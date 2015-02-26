<header>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/css1.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
</header>

    
<div class="jumbtron" >
    <p>Successfully posted</p>

    <button type="button" ><a href="index.php" >Home</a></button>

</div>

<body class="blue" >

</body>




<?php
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");

if (!authenticatUser()) {
    header("Location: " . $path . "index.php");
    die();
}

$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
?>


