<?php
   $name = $_GET['username'];

   if($name == 'lisi'){
       echo '用户名已存在!';
   }else{
       echo '勾';
   }
