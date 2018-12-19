<?php 

	const DB_HOST = 'localhost';
	const DB_LOGIN = 'root';
	const DB_PASSWORD = '';
	const DB_NAME = 'stockdb';
	$base_path = $_SERVER['DOCUMENT_ROOT'];

	$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die("З'єднання з БД не встановлено");