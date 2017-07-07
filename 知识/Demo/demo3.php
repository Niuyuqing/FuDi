<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		<?php
			$name = $email = $website = $gender = $commen = '';
			$nameErr = $emailErr = $websiteErr = $genderErr = '';
			
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if(empty($_POST['fname'])){
					$nameErr = '姓名不能为空';
				} else {
					$nameTem = test_input($_POST["fname"]);
					if(!preg_match("/^[a-zA-z]+$/",$nameTem)){
						$nameErr = '只允许字母和空格';
					} else {
						$name = $nameTem;
					}
				}
				
				if(empty($_POST['femail'])){
					$emailErr = '邮箱不能为空';
				} else {
					$emailTem = test_input($_POST['femail']);
					if(!preg_match('/(\w+)\@(\w+)\.(\w+)/',$_POST['femail'])){
						echo '输入错误，输入的是：'.$_POST['name'].'，请输入正确的邮箱！';
					} else {
						$email = $emailTem;
					}
				}
				
				if(empty($_POST['fwebsite'])){
					$website = '';
				} else {
					$website = test_input($_POST['fwebsite']);
				}
				
				if(empty($_POST['fgender'])){
					$genderErr = '性别必选';
				} else {
					$gender = test_input($_POST['fgender']);
				}
				
				if(empty($_POST['fcommen'])){
					$commen = '';
				} else {
					$commen = test_input($_POST['fcommen']);
				}
			}
			
			function test_input($data){
				$data = trim($data);
				$data = htmlspecialchars($data);
				$data = stripslashes($data);
				
				return $data;
			}
		?>
		
		
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
			name：<input type="text" name="fname" value="<?php echo $name?>" /><span>*</span><span><?php echo $nameErr;?></span><br />
			email：<input type="text" name="femail" value="<?php echo $email?>" /><span>*</span><span><?php echo $emailErr;?></span><br />
			website：<input type="text" name="fwebsite" value="<?php echo $website?>" /><span><?php echo $websiteErr;?></span><br />
			gender：<input type="radio" name="fgender" value="woman" <?php if(isset($gender) && $gender == 'woman'){echo 'checked';}?> />女
					<input type="radio" name="fgender" value="man" <?php if(isset($gender) && $gender == 'man'){echo 'checked';}?> />男
					<span>*</span><span><?php echo $genderErr;?></span><br />
			commen：<textarea name="fcommen" id="" cols="30" rows="10"><?php echo $commen?></textarea><br />
			<input type="submit" value="提交"/>
		</form>
		
		<?php
			echo '提交信息是：<br />';
			echo $name.'<br />';
			echo $email.'<br />';
			echo $website.'<br />';
			echo $gender.'<br />';
			echo $commen.'<br />';
		?>
		
	</body>
</html>