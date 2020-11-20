<?php
 session_start();
 if($_POST['Submit']){
     if(($_POST['login']=="admin")&&($_POST['password']=="1111")){
         $_SESSION['logged_user'] = $_POST['login'];
         header('Location: restricted.php');
         exit;
     }
 }
 ?>
 <html><body>
 Вы ввели неверный пароль!
 <p><a href="login.php">Попробовать еще раз</a></p>
 </body></html>