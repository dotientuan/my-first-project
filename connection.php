<?php 
	//$con = mysqli_connect('localhost', 'root', '' ,'users') or die("Không thể kết nối CSDL")
	//mysqli_query($con, "SET NAMES 'utf8'");
 
class connection{
private $host;
private $user;
private $pass;
private $db;
private $link;
 
 public function __construct(){
 	$this ->host="localhost";
 	$this ->user="root";
 	$this ->pass="";
 	$this ->db="users";

 }
public function setconnection(){
	$this->link=mysqli_connect($this->host,$this->user,$this->pass,$this->db);

}
public function getconnection(){
	$this-> setconnection();
	return $this->link;

}
public function getresult($spl){
	$link=$this->getconnection();
}
}
?>