
<?php

function write_html_file($content){

}

if((isset($_POST['article_title']) && isset($_POST['article_author'])) && isset($_POST['article_content'])){
    include "../Dao/Dao.class.php";

    $sql="INSERT INTO db_article " .
        " (article_id, article_title, article_author, article_content, article_classify, article_time, article_link) ".
        " VALUES " .
        " ('', '{$_POST['article_title']}', '{$_POST['article_author']}', '{$_POST['article_content']}', ".
        "  '{$_POST['article_classify']}', NOW(), 'asdfas') ";

    $date=date("Ymdhis");

    $temp=file_get_contents("article.html");

    $content=$_POST['article_content'];

    $content=str_replace("{article_content}", $content, $temp);

    file_put_contents("../article/{$date}.html", $content);
    /*$fp=fopen("{$date}.html", "w");
    if(fwrite($fp, $content)){
        fclose($fp);

    }*/

    /*$dao=new Dao("blog");
    $dao->query("set names utf8");
    $dao->query($sql);
    $dao->error();
    $dao->close();*/

    //echo $_POST['article_title'] . $_POST['article_author'] . $_POST['article_content'];
}else{
    echo "what's";
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css"/>
</head>
<body>

<script charset="utf-8" src="editor/kindeditor-min.js"></script>
<script charset="utf-8" src="editor/lang/zh_CN.js"></script>
<script>
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id');
    });
</script>

<form action="edit.php" method="post">
    <div class="article">
        <div class="article-title">
            <span class="label">标题：</span>
            <input type="text" name="article_title" class="input-text radius border width200" >
        </div>
        <div class="article-author">
            <span class="label">作者：</span>
            <input type="text" name="article_author" class="input-text radius border width200" >
        </div>
        <div class="article-author">
            <span class="label">文章类型：</span>
            <input type="text" name="article_classify" class="input-text radius border width200" >
        </div>
        <div class="article-content">
            <textarea id="editor_id" name="article_content" style="width:700px;height:300px;margin:10px 20px;"></textarea>
        </div>
        <div class="article-submit">
            <input type="submit" class="btn radius btn-border" value="提交评论" >
        </div>

    </div>
</form>



</body>
</html>
