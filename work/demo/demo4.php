<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			span{
				display: inline-block;
				width: 100px;
				/*background: red;*/
				text-align: right;
			}
			pre{
				display: inline;
				color: red;
			}
			p{
				font-size: 20px;
				color: green;
			}
		</style>
	</head>
	<body>
		
		<?php
			$name = $email = $gender = $url = $speak = '';
			$nameErr = $emailErr = $genderErr = $urlErr = '';
			
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if(empty($_POST['name'])){
					$nameErr = 'Name is required';
				} else {
					$nameTem = test_input($_POST['name']);
					if(!preg_match('/^[a-zA-z ]+$/',$nameTem)){
						$nameErr = 'Name is must be num or kongge';
					} else {
						$name = $nameTem;
					}
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
			<span>Name :</span> <input type="text" name="name" value="<?php echo $name?>" /> <pre>*</pre> <pre><?php echo $nameErr?></pre><br />
			<span>Email :</span> <input type="text" name="email" /><br />
			<span>Gender :</span> <input type="radio" name="gender" value="man" />Man <input type="radio" name="gender" value="woman" />Woman <br />
			<span>Url :</span> <input type="text" name="url" /><br />
			<span>Speak :</span> <textarea name="speak" rows="10" cols="20"></textarea><br />
			<input type="submit" value="SUBMIT"/>
		</form>
		
		<?php
			echo '<p>所填信息如下：</p>';	
			echo 'Name：'.$name;
		?>
		
	</body>
</html>