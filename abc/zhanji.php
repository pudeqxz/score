<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include("config.php");
$host="localhost:3306";
$user="root";
$pass="pude2015";
$dbname="abc";
$id=mysql_connect($host,$user,$pass);
mysql_select_db($dbname);
mysql_query("set names utf-8");
$sql="select name1,score1,name2,score2,time from jifen";
$result=mysql_query($sql)or die("查询失败");
while($row=mysql_fetch_array($result))
{
echo "玩家１：".$row['name1'],"&nbsp;&nbsp&nbsp得分：".$row['score1'],"&nbsp;&nbsp";
echo "玩家２：".$row['name2'],"&nbsp;&nbsp&nbsp得分：".$row['score2'],"&nbsp;&nbsp";
echo "时间：".$row[time];
echo "<br>";
}
?>
<a href="main.php">返回</a>
</body>
</html>
