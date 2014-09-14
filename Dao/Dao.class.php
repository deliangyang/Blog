<?php
/**
 * @author  Deliang Yang
 * @version 0.1.0.0
 * @date    2014-9-11
 *
 */


class Dao{

    private $host="localhost";
    private $user="root";
    private $password="123456";

    private $connect=null;          // 创建数据库实例

    public function __construct($db){
        $this->connect=mysql_connect($this->host, $this->user, $this->password);
        $this->result=mysql_select_db($db);
    }

    public function query($sql){
        return mysql_query($sql);
    }

    public function error(){
        $errno=mysql_errno($this->connect);
        if($errno!=0)
            echo $errno . mysql_error($this->connect);
        else
            return;
    }

    public function close(){
        mysql_close($this->connect);
    }

}