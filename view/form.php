<?php 
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");
 
if(!authenticatUser()) {
    header("Location: " . $path . "index.php");
    die();
}
?>

        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/css1.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">

<body class="blue">

    <div class="jumbotron" >
<h1>Create Blog Post</h1>

<p>Write anything you want then click submit</p>
    </div>
    
    
<body class="blue" >
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title"/>
    </div> 
    
    <div>
        <label for="post" >Post: </label>
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <button type="submit" >Submit</button>
    </div>
</form>
    
</body>
    
    
    