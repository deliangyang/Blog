<?php
header('Content-type: application/x-javascript');
include ("include/config.php");

/*$sql="CREATE DATABASE IF NOT EXISTS BLOG";*/

$sql="INSERT INTO COMMENT(id, user, email, content)".
			"value ('	', 'libai', '623601391@qq.com', 'hello world, this is my world')";
$connect=mysql_connect($host, $user, $pwd);

if($connect)
{
	mysql_select_db("blog");
	if(mysql_query($sql, $connect))
	{
		
	}
	else
		echo mysql_error();
}
else
{
	echo "error";
}

$sql="SELECT * FROM COMMENT";

$result=mysql_query($sql, $connect);


$arr=array();
if($result)
{
	while($row=mysql_fetch_array($result, MYSQL_ASSOC))
		$arr[]=$row;
}
$str=json_encode($arr, JSON_FORCE_OBJECT);


echo $str;

/**
* 
*/
class ClassName
{
	public $name="a";
	public $age=1;
	public $state="good";
	function __construct()
	{
		# code...
	}
}

function str_into_file($filename, $str)
{
	file_put_contents($filename, $str);
}

str_into_file("str.json", $str);

/*$className=new ClassName();
$str=json_encode($className);
echo $str;*/

?>