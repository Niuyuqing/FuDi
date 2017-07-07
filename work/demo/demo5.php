<?php
	header('Content-Type:text/html;charset=utf-8');
	/*$cars = array
	(
	 array('宝马',32,20),
	 array('奥迪',20,10),
	 array('丰田',36,20)
	);	
	
	for($i=0;$i<count($cars);$i++){
		for($y=0;$y<count($cars[$i]);$y++){
			echo $cars[$i][$y].' ';
		}
		echo '<br />';
	}*/
	
	
	
	//echo date('Y-m-d');
	
	
	//include 'footer.php';
	
	
	
	//echo readfile('webdictionary.txt');
	
	
	
	
	/*$myFile = fopen('webdictionary.txt','r') or die('读取文件失败');
	echo fread($myFile,filesize('webdictionary.txt'));
	fclose($myFile);*/
	
	
	
	/*$myFile = fopen('webdictionary.txt','r') or die('读取文件失败');
	while(!feof($myFile)){
		echo fgets($myFile).'<br />';
	}
	fclose($myFile);*/
	
	
	
	/*$myFile = fopen('webdictionary.txt','r') or die('读取文件失败');
	while(!feof($myFile)){
		//echo fgets($myFile).'<br />';
		echo fgetc($myFile).'<br />';
	}
	fclose($myFile);*/
	
	
	
	/*$myFile=fopen('myTest.txt','w');
	fwrite($myFile,'hello world');
	fclose($myFile);*/
	
	
	
	/*if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/pjpeg"))
	&& ($_FILES["file"]["size"] < 20000))
	  {
	  if ($_FILES["file"]["error"] > 0)
	    {
	    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	    }
	  else
	    {
	    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
	    echo "Type: " . $_FILES["file"]["type"] . "<br />";
	    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
	
	    if (file_exists("upload/" . $_FILES["file"]["name"]))
	      {
	      echo $_FILES["file"]["name"] . " already exists. ";
	      }
	    else
	      {
	      move_uploaded_file($_FILES["file"]["tmp_name"],
	      "upload/" . $_FILES["file"]["name"]);
	      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	      }
	    }
	  }
	else
	  {
	  echo "Invalid file";
	  }*/
	 
	 
	 
	 //setcookie("user", "Alex Porter", time()+3600);
	 
	 /*echo $_COOKIE['user'].'<br />';
	 
	 print_r($_COOKIE);*/
	
	 /*if(isset($_COOKIE['user'])){
	 	echo 'welcome '.$_COOKIE['user'];
	 } else {
	 	echo 'welcome guest';
	 }*/
?>

<html>
	<body>
	
		<!--<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file" /> 
			<br />
			<input type="submit" name="submit" value="Submit" />
		</form>-->
	
	</body>
</html>
































