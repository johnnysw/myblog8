<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
</head>
<body>

<?php

    $status = $_GET['status'];
    if($status == 'teacher'){
        echo '老师注册...';
    }else{
        echo '学生注册...';
    }

?>

</body>
</html>