<?php
if($_SERVER["REQUEST_METHOD"] == "POST" ||isset($_POST["submit"])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");
}
?>