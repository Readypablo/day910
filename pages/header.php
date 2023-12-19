
<?php  require('bd_connect/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta  http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/main.css?<?echo time();?>" >

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

</head>


<header>

<div id="menu-left">
    <img src="../img/menu-50.png" width="35px" height="35px" id="left-menu">
    
    <div class="elements-menu">

       


        <div class="menu-elements-none">
        <a href="../index.php" id="silk-header"><p>Главная</p></a>

        </div>


      

        <div class="menu-elements-none">
        <a href="GTO.php" id="silk-header"><p>Каталог</p></a>

          
        </div>


        <div class="menu-elements-none">
        <a href="profile.php" id="silk-header"><p>Корзина</p></a>

       
        </div>


        <div class="menu-elements-none">


            <?php
            
            
            if(isset($_SESSION["first_name"])){
            echo " <a href='bd_connect/logout.php'>
            <input type='button' value='Выйти' class='button-login'></a>
            <br> <br>
            <a href='profile.php'>
            <input type='button' value='Профиль' class='button-login'></a>
            </div>
            ";

    
            }
            else{
            echo "<a href='login.php'>
            <input type='button' value='Войти' class='button-login'></a>
            </div>";
            }
            ?> 
               

        </div>
      

    </div>


</div>

<div id="menu-header-logo">
<a href="..\index.php">  <img src="..\img\logo.jpg" id="logo-foto"></a>
</div>
<div id="space"></div>
<div id="header-menu-name">
  <h2> <a href="..\index.php" id="silk-header1">Меховой стиль&nbsp;&nbsp;</a></h2>
</div>
</header>












