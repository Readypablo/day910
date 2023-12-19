<?php 
include("header.php");
require('bd_connect/db.php');

session_start();
// Когда форма отправлена, проверьте и создайте сеанс пользователя.
if (isset($_POST['email'])) {
    $email = stripslashes($_REQUEST['email']);    
    $email = mysqli_real_escape_string($con, $email);

    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

// Проверьте, существует ли пользователь в базе данных
    $query    = "SELECT * FROM `users` WHERE email='$email'
                 AND password='$password'";

    $result = mysqli_query($con , $query) or die ;
    $rows = mysqli_num_rows($result);
    if( $rows==1){

        // берем данные из базы чтоб потом их передать
        if($result){
            $main_user = mysqli_fetch_assoc($result);
            $_SESSION['user_name_us']=$main_user['first_name'];
            $_SESSION['user_name_last']=$main_user['last_name'];
            $_SESSION['user_mobile']=$main_user['email'];
            $_SESSION['user_birthday']=$main_user['birthday'];
           
           $_SESSION['first_name'] = $email;
             header("Location: profile.php");
    }
// если данные не совпали
    }else{
        echo "
        
        <div class='main-content'>
        <div class='main-info'>
        <div class='form-error'>
        <h3>Неправильный email или пароль</h3><br/>
        <p class='link'>Нажмите чтоб <a href='login.php'>повторить</a> попытку.</p>
        </div>
        </div>
        </div>";
    }
}else{

?>

<div class="main-content"><!--фулл контент -->

        <div class="main-info">
            <form class="form" method="post" name="login">
            <h1 class="login-title">Войдите в профиль</h1>
            <input type="text" class="login-input" name="email" placeholder="email" required>
            <input type="password" class="login-input" name="password" placeholder="Пароль">
            <input type="submit" value="Войти" name="submit" class="login-button">
            <p class="link"> <a href="registration.php"> Зарегистрировавться </a></p>
            </form>
        </div>

</div><?php }?>
<script defer src="../js/min.js"></script>
<script defer src="../js/input.js"></script>
<script >
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>