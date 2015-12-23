<?php
		session_start();
?>
<html>
		<head>
				<meta charset="utf-8">
		</head>
		<body>
				<h3><?php echo "欢迎用户",$_COOKIE['user'],"进入系统";?></h3>
				<form action="jifen.php" method="post">
						<div>
						<p><label>运动类：<input type="text" name="name1" list="sport"></label></p>
						<datalist id="sport">
								<option value="badminton">羽毛球</option>
								<option value="tabletennis">乒乓球</option>
								<option value="basketball">篮球</option>
								<option value="football">足球</option>
								<option value="billiard">台球</option>
						</datalist>
						</div>
						<div>
						<label>对战人：<input type="text" name="user2" list="people"></label>
						<datalist id="people">
								<?php
										$conn=mysql_connect("localhost:3306","root","pude2015");
										mysql_select_db("abc");
										mysql_query("set names utf-8");
										$sql="select username from zhuce";
										$result=mysql_query($sql);
										while($row=mysql_fetch_array($result))
										{
												echo "<option>",$row['username'],"</option>";
								    }
                ?>
						</datalist>
						</div>
						<input type="submit" value="下一步">
		</form>
		<a href="zhanji.php">历史战绩</a>

		</body>

</html>
