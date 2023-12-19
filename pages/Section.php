<?php 
include("bd_connect/auth_session.php");
include("bd_connect/db.php");
include("header.php");
?>



<div class="main-content"><!--фулл контент -->
        <div class="main-info">


     
      <div class="text-info">
      <h1>Расписание тренировок на неделю</h1></div>
    

 
       <?php





// $this_monday = new DateTime('Monday this week');
// $next_monday = new DateTime('Monday next week');
// $interval    = new DateInterval('P1D');
// $datePeriod  = new DatePeriod($this_monday, $interval, $next_monday);
// foreach($datePeriod as $day) {
//     printf("%s | %s<br>\n", $day->format('l'), $day->format('d-m-Y'));
// }

?> 
        <div class="weekend">
        <?php
           
            $first_name=  $_SESSION['user_name_us'];
            $last_name = $_SESSION['user_name_last'];

            $sqlo =  "SELECT * FROM `workout` where last_name='$last_name'";
            $result = $con ->query($sqlo);
     
            $i = 0;
            for($data = []; $row = mysqli_fetch_assoc($result); $data[]=$row)
            {
              $i++;
            }
   
          
        // эт опроверка на количество, не больше 3х
            if($i <3){

              // внесение записи на каждый день недели
          
            $sql =  "SELECT * FROM `workout`";
            //mon
          
            if(isset($_POST["Monday"])){
                $Monday = date( 'Y-m-d', strtotime( 'Monday this week' ) );
                $sql =  "INSERT INTO `workout` (first_name, last_name, Date) VALUES ('$first_name', '$last_name','$Monday')";
                mysqli_query($con, $sql) or die(mysqli_error($con));
             
                echo '<div id="content-blocker">
                <div class=err_block>Вы записались на тренировку
                <input type="button" value="Закрыть" onclick=clewind() class="clickeror">
                </div>
                </div>'; 
            }


            //tue
           
              
        ?>

        
              <!-- <div class="daysweek">
              <section class="namedate">Понедельник</section>
              <section >Время начала</section>
              <section class="statussection">19:30</section>
              <section >Тренер</section>
              <section class="instruktorname">Хафисов Ю.Г.</section>
              <form action="" class="zapisform">
              <input type="submit" value="Записаться" name="submit" class="trenirovkazps">
              </form>
              </div> -->

              
              

        </div>


      </div>
</div><!--фулл контент -->

<?php  include('footer.php');  ?>
             



<script >
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}



</script>
<script src="../js/script.js"></script>
</body>
</html>