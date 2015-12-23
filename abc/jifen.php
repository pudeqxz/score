<?php
                session_start();
		if($_POST['cent1'])
		{
				$host="localhost:3306";
				$user="root";
				$pass="pude2015";
				$dbname="abc";
        $id=mysql_connect($host,$user,$pass);
				mysql_query("set names utf-8");
				mysql_select_db($dbname);
				$sql="insert into jifen(name1,score1,name2,score2,time) values ('".$_POST['user1']."','" . $_POST['cent1'] . "','" . $_POST['user2'] . "','" . $_POST['cent2'] . "','".$_POST['time']."')";
				if ($result=mysql_query($sql))
				{
						echo "已添加。";
						echo "<a href=main.php>返回</a>";
				}
		}
		else
		{
?>
<html>
		<head>
				<meta charset="utf-8">
		</head>
		<body>
				<h2><?php echo $_POST['name1'],"记分统计";?></h2>
				<form action="jifen.php" method="post">
				    <p>时间：<input type="date" name="time" size="15"></p>
						<p>玩家１：<input type="text" value="<?php echo $_COOKIE['user'];?>" name="user1" size="15">&nbsp;&nbsp;得分：<input type="number" name="cent1"></p>
						<p>玩家２：<input type="text" value="<?php echo $_POST['user2']; ?>" name="user2" size="15"/>&nbsp;&nbsp;得分：<input type="number" name="cent2"></p>
						<input type="submit" value="提交">
				</form>
		</body>
</html>
<?php
	}
?>
