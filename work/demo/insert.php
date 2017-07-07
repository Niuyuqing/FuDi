<?php
	header('Content-Type:text/html;charset=utf-8');
	$conn = mysql_connect('localhost','root','root');
	
	if(!$conn){
		die('连接数据库失败！');
	}/* else{
		if(mysql_query('CREATE DATABASE my_db',$conn)){
			echo '创建数据库成功';
		} else {
			echo '创建数据库失败，'.mysql_error();
		}
	}	*/
	
	mysql_select_db('my_db',$conn);
	/*$sql = "CREATE TABLE Persons(FirstName varchar(15),LastName varchar(15),Age int)";
	mysql_query($sql,$conn);*/
	
	//mysql_query('insert into Persons(FirstName,LastName,Age) values ("Peter","Zhuna",22)');
	
	/*$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	
	if(mysql_query("insert into Persons(FirstName,LastName,Age) values ('$firstname','$lastname','$age')")){
		echo '插入数据成功';
	} else {
		echo '插入失败，'.mysql_error();
	}*/
	
	//数据查询
	mysql_select_db('my_db',$conn);
	
	//条件查询
	//$result = mysql_query('select * from Persons where FirstName="黄"');
	
	//普通查询
	$result = mysql_query('select * from Persons');
	
	//desc降序查询
	//$result = mysql_query('select * from Persons order by age desc');
	
	//更新
	//mysql_query('update Persons set age=70 where FirstName="黄" and LastName="晓明"');
	
	//删除
	//mysql_query("DELETE FROM Persons WHERE LastName='黄'");
	
	echo "<table border='1'><tr style='background:red'><td>FirstName</td><td>LastName</td></tr>";
	
	while($row = mysql_fetch_array($result)){
		echo '<tr><td>'.$row['FirstName'].'</td><td>'.$row['LastName'].'</td></tr>';
	}
	
	echo "</table>";
	
	mysql_close($conn);
?>