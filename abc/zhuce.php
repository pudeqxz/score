<?php
//session_start();
include("config.php");
$name=htmlspecialchars($_POST['username']);
$password=htmlspecialchars($_POST['password']);
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
if(isset($_POST['submit']))
{
if($name==""||$password=="")
{
echo "<script>alert('请确认信息完整性！');</script>";
}
else
{
$sql = "select username from zhuce where username = '$_POST[username]'";
$result = mysql_query($sql);
$num = mysql_num_rows($result);
if($num)
{
 echo "<script>alert('用户名已存在');</script>";
}
else
{
$sql_insert = "insert into zhuce (username,password) values('$_POST[username]' ,'$_POST[password]')";
$res_insert = mysql_query($sql_insert);
if($res_insert)
{
echo "<script>alert('注册成功！！');location.href='login.php';</script>";
}
}
}
}
?>
<html>
		<head>
				<meta charset="utf-8">
		</head>
		<body>
				<form action="zhuce.php" method="post">
				<h2>玩家注册</h2>
						<p>用户名：<input type="text" name="username" size="20"></p>
						<p>密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" name="password" size="20"></p>
						<input type="submit" name="submit" value="提交">
				</form>
		</body>
</html>
