<?php 

class database
{
  public $hostadress="localhost";
  public $username="root";
  public $password="";
  public $database="dashboard";
  public $link;
  public $message;

  function __construct()
  {
    $this->database();
  }

  private function database()
  {
    $this->link=new mysqli($this->hostadress,$this->username,$this->password,$this->database);
    if($this->link)
    {
      $this->message="Database Connection Successfulluy!!";
    }
    else
    {
      $this->message="Database Connection Unsuccessfull";
    }
  }

  function __destruct()
  {
    $this->link->close();
  }

}

$db=new database();
// echo $db->message;


?>