<h1>Logout Page!!</h1>

<?php

session_start();
session_destroy();

header("Location: index.php");

?>