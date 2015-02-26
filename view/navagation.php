<?php
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");

if(!authenticatUser()) {
    header("Location: " . $path . "index.php");
    die();
}
?>
<nav>
    <ul>
        <li><a class="red" href="<?php echo $path . "post.php"?>">Create A Post</a></li>
    </ul>
</nav>