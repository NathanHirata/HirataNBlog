<?php
require_once (__DIR__ . "/../model/config.php");

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

echo $password;

$salt = "$5$" . "rounds=5000" . uniqid(mt_rand(), true) ."$";

$hashedPassword = crypt($password, $salt);

$query = $_SESSION["connection"]->query("INSERT INTO users SET "
        . "email = '$email',"
        . "username = '$username',"
        . "password = '$hashedPassword',"
        . "salt = '$salt'");

if($query) {
    echo "succesfully created user: $username";
}
?>

<br /><button type="button" ><a href="index.php" >HOME</a></button>
<br /><button type="button" ><a href="login.php" >LOGIN</a></button>