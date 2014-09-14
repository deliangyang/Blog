<?php
/**
 * User: Deliang Yang
 * Version: 0.1.0.0
 * Date: 14-9-12
 * Time: 下午10:41
 */

include "../Dao/Dao.class.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css"/>
</head>
<body>
    <div id="">
        <input type="text" class="input-text radius border" >
        <input type="text" readonly class="input-enabled radius border" >
        <input type="button" class="btn radius btn-border" value="Start" >
    </div>
    <a href="#" class="tag radius">this is name of your</a>
    <a href="#" class="tag radius">this is name of your</a>
    <a href="#" class="tag radius">this is name of your</a>
    <a href="#" class="tag radius">this is name of your</a>
    <br>
    <textarea class="radius input-text border">thi si</textarea>

    <div class="comment">
        <div class="comment-user">
            <span class="label">用户名：</span>
            <input type="text" name="comment_user" class="input-text radius border width200" >
        </div>
        <div class="comment-eamil">
            <span class="label">邮箱：</span>
            <input type="text" name="comment_eamil" class="input-text radius border width200" >
        </div>
        <div class="comment-content">
            <textarea name="comment_content" class="radius input-text border">thi si</textarea>
        </div>
        <div class="comment-submit">
            <input type="button" class="btn radius btn-border" value="提交评论" >
        </div>
    </div>


    <div class="article">
        <div class="article-title">
            <span class="label">标题：</span>
            <input type="text" name="article_title" class="input-text radius border width200" >
        </div>
        <div class="article-author">
            <span class="label">作者：</span>
            <input type="text" name="article_author" class="input-text radius border width200" >
        </div>
        <div class="article-content">
            <textarea name="article_content" class="radius input-text border">thi si</textarea>
        </div>
        <div class="article-submit">
            <input type="button" class="btn radius btn-border" value="提交评论" >
        </div>
    </div>




</body>
</html>
