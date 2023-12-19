<?php 
include("bd_connect/auth_session.php");
include("bd_connect/db.php");
include("header.php");
?>


 


<div class="main-content"><!--фулл контент -->

   <div class="main-info">
    <div class="text-info">
 <h1>Корзина</h1></div>
 



<div class="cont-koll">

<?php 
   
   $sql2 = "SELECT workout.id,workout.first_namee,first_name,last_name,experience,img FROM workout inner join collective on workout.lek_id = collective.id;";
   $result = $con->query($sql2);


   for($data = []; $row = mysqli_fetch_assoc($result); $data[]=$row)
   {

   }



//    $sql = "SELECT * FROM workout";
//    $result1 = $con->query($sql);
//    for($data1 = []; $row1 = mysqli_fetch_assoc($result1); $data1[]=$row1)
//    {

//    }
//    foreach($data1 as $elem1)  {
//   $llll=  $elem1['first_namee'] ;
//    }

   $i=0;

//    foreach($data as $elem)
//    {
//            if($_SESSION['user_name_us'] ==$elem['first_name'] ){
//                          $i++;          
//                          $id= $elem['id']           
    
  
              
//                             $id= $elem['id']  ;echo '<input type="submit" value="отказаться" class="btn-del" name='.$id.'>';  
//                             if(isset($_POST["$id"])){
//                                $query="DELETE FROM `workout` WHERE id=$id";
//                                mysqli_query($con , $query) or die ;
//                               }}}
                              

$cost=0;
                foreach($data as $elem)  {

                    if($_SESSION['user_name_us'] == $elem['first_namee']){

                    $id= $elem['id'];
                    echo '
                    <div class="popular-card">
                    <img src="../img/'.$elem['img'].'" alt="" class="imgbaba">
                            <h2>'.$elem['first_name'].'</h2>
                            <p>Фирма:'.$elem['last_name'].'</p>
                            <p>цена:'.$elem['experience'].'</p>';
                            $cost+=$elem['experience'];
                        
                            echo ' <form method="post"><input type="submit" value="Удалить" class="btn-del" name='.$id.'></form>';
                            if(isset($_POST["$id"])){
                            $query="DELETE FROM `workout` WHERE id=$id";
                            mysqli_query($con , $query) or die ;
                            }
                        
                      
                            echo ' </div>';  }
                }




   if(isset($_POST["submit"])){

    echo '<div id="content-blocker">
    <div class=err_block>отправил на оформление молодец
    <input type="button" value="Закрыть" onclick=clewind() class="clickeror">
    </div>
    </div>'; 
   }


   ?>







</div>



                <script src="../js/script.js"></script>

</div>
</div>


              
 
        