<?php 

// начинаем сессию 
session_start();
if(!isset($_SESSION["first_name"])){
    header("Location: 404found.php");
    exit();
}
?>




