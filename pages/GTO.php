<?php 
include("bd_connect/auth_session.php");
include("header.php");
?>




<div class="main-content"><!--фулл контент -->
  <div class="main-info">


    
<div class="text-info">
 <h1>Каталог</h1></div>



 <div class="container" style="max-width:800px;margin:0 auto;margin-top:50px;">  
     
     <div style="margin-bottom:30px;"><input type="text" class="form-control" id="query_find" placeholder="Search"/></div>
     <table class="table table-hover">
         <thead>
             <tr>
              
            
             </tr>
         </thead>
         <tbody id="tbl_body">
                 <!-- <tr>
                     <td><?php echo $row['first_name']; ?></td>
                     <td><?php echo $row['last_name']; ?></td>
                     <td><?php echo $row['experience']; ?></td>
                     <td><?php echo $row['img']; ?></td>
                  
                 </tr> -->
             <?php  ?>
         </tbody>
     </table>
 </div>
</div>
</div>

<?php 




if($_SESSION['user_name_last'] == 'admin'){

  echo '<div class="block-changes">
  <h2>Панель добавления товара</h2>
  <form  method="post" id="form-changes">
  
  <h3 class="name-card">Название товара</h3>
  <input type="text" class="inp-chang" name="name" required>

  <h3 class="name-card">Название материала</h3>
  <input type="text" class="inp-chang" name="firmname" required>
  
  <h3 class="name-card">цена</h3>
  <textarea  id="area" cols="20" rows="5"  name="info" required></textarea>
  
  <h3 class="name-card">Имя файла изображения</h3>
  <input type="text" class="inp-chang" name="silk" required>
  <p class="ss">пример: 1.jpg , 2.png (файлые которые есть у вас)</p>
  
  <input type="submit" value="Добавить" class="btn-chang" name="send">
  </form>
  </div>';

  if(isset($_POST['send'])) {
      $sql2 = 'SELECT * from phone ';

      $name = stripslashes($_REQUEST['name']);    
      $name = mysqli_real_escape_string($con, $name);

      $firmname = stripslashes($_REQUEST['firmname']);    
      $firmname = mysqli_real_escape_string($con, $firmname);

      $info = stripslashes($_REQUEST['info']);
      $info = mysqli_real_escape_string($con, $info);

      $silk = stripslashes($_REQUEST['silk']);
      $silk = mysqli_real_escape_string($con, $silk);



      $allowedPattern = '/^\d+\.jpg$/';
      if (preg_match($allowedPattern, $silk)){
      

          $query = "INSERT into `collective` (first_name, last_name, experience,img) VALUES ('$name', '$firmname', '$info', '$silk')";

          $ult = mysqli_query($con, $query);

          // чекаем все поля все ли хорошо там

          if($ult){
              echo "<div class='form'>
              <h3>Добавили товар</h3><br/>
              </div>";
          }else{
              echo "<div class='form'>
              <h3>Ты где то напакостил</h3><br/>
              </div>";
               }    

      } else {
          // Введенные данные содержат запрещенные символы
          echo "Ошибка! Недопустимые символы в данных.";
      }
     
    

  }

}








?>







 <div class="popular-row">
 <?php 
    $first_name=$_SESSION['user_name_us'];
   $sql2 = 'SELECT * from collective ';
   $result = $con->query($sql2);
   while ($row = $result->fetch_assoc()) {
       $id= $row['id'];
       echo '
       <div class="popular-card">
       <img src="../img/'.$row['img'].'" alt="" class="imgbaba">
            <h2>'.$row['first_name'].'</h2>
            <p>Фирма:'.$row['last_name'].'</p>
            <p>цена:'.$row['experience'].'</p>';
        
               echo ' <form method="post"><button type="submit" value='.$id.' class="btn-del" name='.$id.'> В корзину </button></form>';
             if(isset($_POST["$id"])){
                $kk=$_POST["$id"];

              $sql = "INSERT INTO `workout` (first_namee, lek_id) VALUES ('$first_name', '$kk') ";
              mysqli_query($con, $sql) or die(mysqli_error($con));
             }
           
           
             echo ' </div>';
   }
   ?>
   </div>









</div>
</div><!--фулл контент -->

<footer>
 <button></button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).on("keyup", "#query_find", function () {
                var query_find = $("#query_find").val();
                $.ajax({
                    url: 'search.php',
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