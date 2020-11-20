<?php
 // открываем сессию
 session_start();
 if(!isset($_SESSION['logged_user'])){
     header('Location: login.php');
     exit;
 }
 ?>
 <html>
 <body>
 Здравствуйте, <?php echo $_SESSION['logged_user']; ?>, вы успешно вошли
 </body>
 </html>