<?php
/*
 * @Author: your name
 * @Date: 2021-10-23 21:44:00
 * @LastEditTime: 2021-10-23 22:17:21
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \htdocs\BigHomeWork\js\dblink.php
 */
$dbHost = "localhost";//客户端，可用localhost代替
$dbUser = "root";     //数据库用户名
$dbPass = "";  //数据库密码
$dbName = "users";//数据库名称
$link = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if (!$link){
	echo mysqli_connect_error();	
}
?>
