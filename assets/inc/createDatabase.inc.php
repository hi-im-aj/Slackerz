<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "SlackerzDB";

	try {
	    $conn = new PDO("mysql:host=$servername", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "CREATE DATABASE $dbname";
	    $conn->exec($sql);
	    echo "Database created successfully<br>";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage() . "<br>";
	    }
	$conn = null;
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $sql = "CREATE TABLE users (
	    id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
	    username TINYTEXT NOT NULL,
	    email TINYTEXT NOT NULL,
		password LONGTEXT NOT NULL,
		avatar LONGTEXT NOT NULL)";

	    $conn->exec($sql);
	    echo "Table created successfully<br>";
		}
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage() . "<br>";
	    }
	$conn = null;
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $sql = "CREATE TABLE workplaces (
	    id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	    ownerID int(11) NOT NULL,
	    avatar LONGTEXT NOT NULL,
	    name TINYTEXT NOT NULL)";

	    $conn->exec($sql);
	    echo "Table created successfully<br>";
		}
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage() . "<br>";
	    }
	$conn = null;