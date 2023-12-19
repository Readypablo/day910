<?php 
include("bd_connect/auth_session.php");
include("header.php");
?>



<div class="main-content"><!--фулл контент -->
   <div class="main-info">
    <div class="text-info">
 <h1>Руководство</h1></div>
 



<div class="cont-koll">

<?php 

$sql2 = 'SELECT * from collective ';
$result = $con->query($sql2);

while ($row = $result->fetch_assoc()) {
    $id= $row['id'];
    echo '
    <div class="popular-card">
    <img src="../img/'.$row['img'].'" class="img-sotr">
         <h2 class="info-sotr">'.$row['first_name'].' '.$row['last_name'].'</h2>
       
         <p class="experience">'.$row['experience'].' лет стажа</p>' ;
         
        
        
          echo ' </div>';
}


?>




</div>




</div>
</div><!--фулл контент -->

<footer>
  
    <div class="footer-column">
        <a href="..\index.html" class="silk-footer">О нас</a>
        <a href="Dokument.html" class="silk-footer">Документы</a>
        <a href="Kollektiv.html" class="silk-footer">Директор</a>
        <a href="Kollektiv.html" class="silk-footer">Руководство</a>
    </div>
    <div class="footer-column">
         <a href="GTO.html" class="silk-footer">ГТО</a>
        <a href="Section.html" class="silk-footer">Секции</a>
        <a href="Section.html" class="silk-footer">Хоккей с мячом</a>
        <a href="Section.html" class="silk-footer">Расписание игр</a>
    </div>
    <div class="footer-column">
            <div class="tel-icon">
              <img src="..\img\tel-50.png" width="20px" height="20px"><p>8 (35164) 3-29-71 (Центр Досуга)<br> 8 (35164) 3-29-70 (Стадион)</p>
            </div>
             <div class="tel-icon">
              <a href="https://vk.com/mbusotsnikelshchik">
              <img src="..\img\vk-50.png" width="25px" height="25px"></a>
              <a href="https://vk.com/away.php?to=https%3A%2F%2Finstagram.com%2Fsots_nikelshchik%3Fr%3Dnametag">
              <img src="..\img\inst-50.png" width="25px" height="25px"></a>
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

</body>
</html>