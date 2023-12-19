
<?php 

$host= 'localhost';
 $user = 'root';
 $password = '';
 $db_name = 'PP_sql';
 $con = mysqli_connect($host, $user, $password, $db_name);

if(mysqli_connect_errno()){
    echo "failed".mysqli_connect_errno();
}
?>


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
  <link rel="stylesheet" type="text/css" href="css\main.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

</head>
<body >
<header>

<div id="menu-left">
    <img src="img/menu-50.png" width="35px" height="35px" id="left-menu">
    
    <div class="elements-menu">

    

        <div class="menu-elements-none">
        <a href="pages/Section.php" id="silk-header"><p>Главная</p></a>
        </div>


      

        <div class="menu-elements-none">
        <a href="pages/GTO.php" id="silk-header"><p>Каталог</p></a>
        </div>


        <div class="menu-elements-none">
        <a href="pages/profile.php" id="silk-header"><p>Корзина</p></a>
        </div>


        <div class="menu-elements-none">


<a href='pages/login.php'>
<input type='button' value='Войти' class='button-login'></a>
</div>







</div>

      

    </div>


</div>

<div id="menu-header-logo">
<a href="index.php">  <img src="img\logo.jpg" id="logo-foto"></a>
</div>
<div id="space"></div>
<div id="header-menu-name">
  <h2> <a href="index.php" id="silk-header1">Меховой стиль&nbsp;&nbsp;</a></h2>
</div>
</header>




<div class="main-content"><!--фулл контент -->
    <div class="main-info">
    <div id="img-glav">
            <img src="img\cuchka.jpeg" id="fotka-slogan" width="100%" height="100%">
          </div>
            <div class="text-info">
                        <h1>Отзывы наших клиентов</h1>

                        <p class="text-info-p">
                          <form action="" method="post">
            <?php 
            $sql3 = 'SELECT * from Reviews order by rand() limit 20';
            $result2 = $con->query($sql3);
            while ($row2 = $result2->fetch_assoc()) {
                echo '<div class="review-item">';
                echo $row2['Content'];
                $id= $row2['id'];
          
           
        
                echo '</div>';


            }

            
?></form>

</p>




                </div>
   </div>
</div><!--фулл контент -->





<footer>

    <div class="footer-column">
        <a href="index.php" class="silk-footer">О нас</a>
        <a href="pages\Dokument.php" class="silk-footer">Документы</a>
        <a href="pages\Kollektiv.php" class="silk-footer">Директор</a>
        <a href="pages\Kollektiv.php" class="silk-footer">Руководство</a>
    </div>
    <div class="footer-column">
         <a href="pages\GTO.php" class="silk-footer">ГТО</a>
        <a href="pages\Section.php" class="silk-footer">Секции</a>
        <a href="pages\Section.php" class="silk-footer">Хоккей с мячом</a>
        <a href="pages\Section.php" class="silk-footer">Расписание игр</a>
    </div>
    <div class="footer-column">
            <div class="tel-icon">
              <img src="img\tel-50.png" width="20px" height="20px"><p>8 (35164) 3-29-71 (Центр Досуга)<br> 8 (35164) 3-29-70 (Стадион)</p>
            </div>
             <div class="tel-icon">
              <a href="https://vk.com/mbusotsnikelshchik">
              <img src="img\vk-50.png" width="25px" height="25px"></a>
              <a href="https://vk.com/away.php?to=https%3A%2F%2Finstagram.com%2Fsots_nikelshchik%3Fr%3Dnametag">
              <img src="img\inst-50.png" width="25px" height="25px"></a>
            </div>
            <div class="tel-icon">
              <p>Mail:socnikel@mail.ru</p>
            </div>
            <div class="tel-icon"> 
              <p>г. Верхний Уфалей, улица Островского, 2/1</p>
            </div>
    </div>
</footer>



<script src="js\app.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).on("keyup", "#query_find", function () {
                var query_find = $("#query_find").val();
                $.ajax({
                    url: 'pages/search.php',
                    type: 'POST',
                    data: {query_find: query_find},
                    success: function (data) {
                        $("#tbl_body").html(data);
                    }
                });
            });
            </script>


</body>
</html>