<?php

// comment
class Database
{
	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "banvemaybay";
	$conn = null;
	$result = null;
	$row = null;

	function connect()
	{
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error)
			die("Connection failed: " . $conn->connect_error);
	}

	function exec($sqlstr)
	{
		$result = $conn->query($sql);
		if($result->num_rows > 0)
			return true;
		else
			return false;
	}

	function fetch()
	{
		while($row = $result->fetch_assoc())
			return $row;
	}

	function close()
	{
		$conn->close();
	}
}

?>