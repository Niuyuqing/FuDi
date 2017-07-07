<?php
	session_start();
	
	//$_SESSION['view'] = 1;
	
	//echo $_SESSION['view'];
	
	if(isset($_SESSION['view'])){
		$_SESSION['view'] = $_SESSION['view']+1;
	} else {
		$_SESSION['view'] = 1;
	}
	
	echo 'Views：'.$_SESSION['view'];
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
	</body>
</html>