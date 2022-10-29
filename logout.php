<?php
 setcookie('login',true,time()-60*60*60*24*30,'','',true);
 setcookie("email",'',time()+60*60*60*24*30,'','',true);
 setcookie("nic",'',time()-60*60*60*24*30,'','',true);
  header("location:index.php")
?>