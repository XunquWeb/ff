<?php
	$con = mysql_connect('localhost', 'root', '123456') or die('Fail to connect Mysql.');
	mysql_query("SET NAMES UTF8");
	mysql_query("CREATE DATABASE pingche", $con) or die('Fail to create db.');
	mysql_select_db('pingche') or die('Fail to connect db.');

	$create = <<<TR
		CREATE TABLE user(
			id int(11) AUTO_INCREMENT,
			stu_num bigint(11),
			username text COLLATE utf8_general_ci,
			password varchar(32) COLLATE utf8_general_ci,
			email text COLLATE utf8_general_ci,
			PRIMARY KEY(id)
		);
TR;
	mysql_query($create) or die('Fail to create table.');
	echo "Successfully updating the database!";
?>