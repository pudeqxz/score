<?php
		if($_COOKIE['user']!="")
		{
				header('location:main.php');
                                
		}
		if(isset($_POST['submit']))
		{
				$user=htmlspecialchars($_POST['username']);
				$password=htmlspecialchars($_POST['password']);
				if($user==""||$password=="")
				{
						echo "<script>alert('请重新输入用户名或密码');</script>";
				}
				else
				{
						mysql_connect("localhost:3306","root","pude2015");//连接mysql
						mysql_select_db("abc");//连接数据库
						mysql_query("set names 'utf-8'");
						$sql="select username,password from zhuce where username='$_POST[username]' and password='$_POST[password]'";
                                                setcookie('user',htmlspecialchars($_POST['username']));//设置COOKIE
						$result = mysql_query($sql);
						$num = mysql_num_rows($result);
						if($num)
						{
								$row = mysql_fetch_array($result);
								echo $row[0];
								header("location:main.php");
						}
						else
						{
								echo "<script>alert('用户名或密码不正确！');</script>";
						}
				}
		}
      ?>
<html>
		<head>
				<meta charset="utf-8">
		</head>
		<body>
				<form action="login.php" method="post">
						<h2>游戏登录</h2>
						<p>用户名：<input type"text" name="username" size="20"></p>
						<p>密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" name="password" size="20"></p>
						<p><input type="submit" name="submit" value="登录">&nbsp;&nbsp;<a href="zhuce.php"><input type="button" value="注册"></a></p>
				</form>
		</body>
</html>
