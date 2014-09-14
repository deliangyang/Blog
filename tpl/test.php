<?php
/**
 * User: Deliang Yang
 * Version: 0.1.0.0
 * Date: 14-9-12
 * Time: 下午8:37
 */

include "../Dao/Dao.class.php";

if(isset($_POST["doo"])){
    $dao=new Dao("blog");
    $sql="DELETE FROM comment WHERE id = {$_POST['doo']}";
    //$dao->close();
    $dao->query($sql);
    $dao->error();
}