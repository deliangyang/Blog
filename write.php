<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    $date=date("Ymd");

    $content='<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'.
        "\n"."这是一个静态生成网页的测试文件，文件名为<font color=#ff0000>$date.html</font>";

    $fp=fopen("{$date}.html", "w");
    if(fwrite($fp, $content)){
        fclose($fp);
        die("created successfully");
    }else{
        die("write error");
    }
?>



</body>
</html>


