<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>第一个PHP程序</title>
	</head>
	<body>
		<form method="post">
			Name: <input type="text" name="fname"><br />
			Country : <input type="text" name="fcountry" id="fcountry" />
			<input type="submit" value="提交">
		</form>
		
		<?php
			//echo "我的第一段 PHP 脚本！";
			
			
			
			/*$x = 5;
			$y = 9;
			$all = $x + $y;
			echo $all;*/
			
			
			
			/*$x = 10;
			
			function test(){
				$y = 20;
				
				echo '全局变量：'.$x;
				echo '<br />';
				echo '局部变量：'.$y;
				echo '<br />';
			}
			
			test();
			
			echo '全局变量：'.$x;
			echo '<br />';
			echo '局部变量：'.$y;*/
			
			
			
			/*$x = 10;
			$y = 5;
			
			function test(){
				global $x,$y;
				$y = $x + $y;
			};
			
			test();
			echo $y;*/
			
			
			
			/*$x = 9;
			$y = 4;
			
			function test(){
				$GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
			};
			
			test();
			
			echo $x;*/
			
			
			
			/*function test(){
				static $x = 5;
				echo $x;
				$x++;
			};
			
			test();
			test();
			test();*/
			
			
			
			/*$x = print 'hello';
			echo $x;*/
			
			
			
			/*echo '这段话','由多个','字符串组成';
			echo '这段话'.'由多个'.'字符串组成';*/
			
			
			
			/*$txt1="Learn PHP";
			$txt2="W3School.com.cn";
			$cars=array("Volvo","BMW","SAAB");
			
			echo $txt1;
			echo "<br>";
			echo "Study PHP at $txt2";
			echo "<br>";
			echo "My car is a {$cars[0]}";*/
			
			
			
			/*$x = 5985;
			var_dump($x);
			echo "<br>"; 
			$x = -345; // 负数
			var_dump($x);
			echo "<br>"; 
			$x = 0x8C; // 十六进制数
			var_dump($x);
			echo "<br>";
			$x = 047; // 八进制数
			var_dump($x);*/
			
			
			
			/*$cars = array('奥迪','宝马','揽胜路虎');
			var_dump($cars);*/
			
			
			
			/*class Car
			{
			    var $color;
			    function Car($color="green") {
			      $this->color = $color;
			    }
			    function what_color() {
			      return $this->color;
			    }
			}
			
			function print_vars($obj) {
			   foreach (get_object_vars($obj) as $prop => $val) {
			     echo "\t$prop = $val\n";
			   }
			}
			
			// instantiate one object
			$herbie = new Car("white");
			
			// show herbie properties
			echo "\herbie: Properties\n";
			print_vars($herbie);*/
			
			
			
			/*$x = 'hello world';
			$x = null;
			var_dump($x);*/
			
			
			
			//echo strlen('hello world');
			
			
			
			//echo strpos('hello world','l');
			
			
			
			//define('GREETING','hello world',true);
			
			
			
			/*$x = 10;
			$y = 20;
			//echo ++$x;
			//echo --$x;
			
			var_dump($x < $y);*/
				
				
				
			/*$x = 10;
			var_dump(isset($x));*/
			
			
			
			/*$username = 'join';
			var_dump(isset($username)?$username:'amy');*/
			
			
			
			/*echo 'hello';
			echo PHP_EOL;
			echo 'world';*/
			
			
			
			/*$t = 20;
			if($t < 10){
				echo 'hava a good day';
			} else {
				echo 'hava a bad day';
			}*/
			
			
			
			/*$color = 'blue';
			switch( $color ){
				case 'green':
					echo 'this color is green';
				break;
				case 'red':
					echo 'this color is red';
				break;
				case 'yellow':
					echo 'this color is yellow';
				break;
				default:
					echo '赤橙黄绿青蓝紫';
			};*/
			
			
			
			//$fruit = array('apple','banana','orange');
			//echo '我最喜欢的水果是：'.$fruit[0].'，'.$fruit[1].'和'.$fruit[2];
			//echo count($fruit);
			/*for($x=0;$x<count($fruit);$x++){
				echo $fruit[$x].'<br />';
			}*/
			
			
			
			/*$username = array('join'=>35,'tom'=>22,'amy'=>30);
			//echo 'join age is '. $username['join'];
			foreach($username as $x=>$x_val){
				echo $x.'---'.$x_val.'<br />';
			};*/
			
			
			
			/*$cars=array("Volvo","BMW","Toyota");
			sort($cars);
			for($x=0;$x<count($cars);$x++){
				echo $cars[$x].'<br />';
			}*/
			
			
			
			/*$x = 20;
			$y = 20;
			function test(){
				$GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
			}
			test();
			echo $z;*/
			
			
			
			/*echo $_SERVER['PHP_SELF'];
			echo $_SERVER['SERVER_ADDR'];
			echo $_SERVER['SERVER_NAME'];*/
			
			
			
			
			
			/*$name = $_REQUEST['fname']; 
			$country = $_REQUEST['fcountry'];
			echo '姓名：'.$name.'，国家：'.$country;*/
			
			
			
			/*$name = $_POST['fname'];
			$country = $_POST['fcountry'];
			echo '姓名：'.$name.'，国家：'.$country;	*/
			
			
			
			/*$project = $_GET['project'];
			$web = $_GET['web'];
			echo '科目是：'.$project.'，网址是：'.$web;	*/
			
			
			
			/*$i = 1;
			while($i < 5){
				echo 'hello 我是第'.$i.'个'.'<br />';
				$i++;
			}*/
			
			
			
			
			/*$i = 10;
			do{
				echo 'hello 我是第'.$i.'个'.'<br />';
				$i++;
			} while($i < 5);*/
			
				
				
				
			//echo '这是第'.__LINE__.'行';
			//echo '该文件位于：'.__FILE__;
			//echo '该文件位于：'.__DIR__;
			/*function test(){
				echo '函数名为：'.__FUNCTION__;
			}
			test();*/
			
			
			
			
			$str = "This is some <b>bold</b> text.";
			echo htmlspecialchars($str);
			
			
			
			
		?>
		
	</body>
</html>