<?php

// commentlkhhjk

class Database
{
	private $hostname = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "chuyenbay";
	private $conn = null;
	private $result = null;
	private $row = null;

	public function connect()
	{
		$this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
		if (!$this->conn){
            echo"Kết nối thất bại ";
            exit();
        }
        else{
            mysqli_set_charset($this->conn ,'utf8');
            echo "kết nối thành công"; 
        }
			
	}

	public function exec($sql)
	{
		$result = $conn->query($sql);
		if($result->num_rows > 0)
			return true;
		else
			return false;
	}
    public function getDate(){
        if($this -> $result){
            $data = mysqli_fetch_array($this->$result);
        }
        else{
            $data = 0;
        }
        return $data;
    }
    public function getAllData(){
        if(!$this -> $result){
            $data = 0;
        }
        else{
            while($datas = $this -> getDate()){
                $data[] = $datas;
            }
        }
        return $data;
    }
    public function InsertData($sql){
        return $this->execute($sql);
    }
    public function UpdateData($sql){
        return $this->execute($sql);
    }
    public function DeleteData($sql){
        return $this->execute($sql);
    }
	public function fetch()
	{
		while($row = $result->fetch_assoc())
			return $row;
	}

	public function close()
	{
		$conn->close();
	}
}
?>