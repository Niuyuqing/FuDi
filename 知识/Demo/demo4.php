<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
			<input type="text" name="name" />
			<input type="submit" value="提交"/>
		</form>
		<?php
			if(!preg_match('/(\w+)\@(\w+)\.(\w+)/',$_POST['name'])){
				echo '输入错误，输入的是：'.$_POST['name'];
			} else {
				echo '输入正确，输入的是：'.$_POST['name'];
			}
		?>
	</body>
</html>

