<?php 
require_once(__DIR__ . "/../model/config.php");
?>

        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/css1.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">

<div class="jumbotron" >
<h1>Login</h1>
</div>

        <body class="blue" >

<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
    <div>
        <label for="username" >Username: </label>
        <input type="text" name="username" />
    </div>
        
    <div>
        <label for="password" >Password: </label>
        <input type="password" name="password" />
    </div>    
    
    <div>
        <button type="submit" >Submit</button>
    </div>
</form>

        </body>