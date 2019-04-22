<?php

    $name = $_POST['username'];//接收前一个页面的name为username的输入框的值

    //$pwd = $_POST["password"];

    if($name == 'lisi'){
        echo '用户名已存在!';
    }

