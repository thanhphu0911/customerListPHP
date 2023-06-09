<?php
  class Database{
    private $connection;
    function __construct(){
      $this->connect_db();
    }
    
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'mydb');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_error());
      }
    }
    public function create($fname,$lname,$email,$age){
      $sql = "INSERT INTO student (firstName, lastName, email, age) VALUES ('$fname', '$lname', '$email','$age')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read($id=null){
		    $sql = "SELECT * FROM Student";
		    if($id){
          $sql .= " WHERE id=$id";
        }
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
  }
  $database = new Database();
?>