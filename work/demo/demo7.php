<?php
	//$file = fopen('welcome.txt','r');
	
	header('Content-Type:text/html;charset=utf-8');
	
	if(!file_exists('welcome.txt')){
		echo '文件不存在';
	} else {
		$file = fopen('welcome.txt','r');
	}
?>