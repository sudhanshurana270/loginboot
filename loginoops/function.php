<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'Qwe@#@321!');
define('DB_NAME', 'userdb');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}
public function usernameavailblty($uname) {
$result =mysqli_query($this->dbh,"SELECT Username FROM tblusers WHERE Username='$uname'");
return $result;

}
public function registration($fname,$uname,$uemail,$pasword)
{
$sql="INSERT INTO tblusers (id,FullName,Username,UserEmail,Password,RegDate) VALUES('',$fname,$uname,$uemail,$pasword)";
$ret=mysqli_query($this->dbh,$sql);
return $ret;
}

public function signin($uname,$pasword)
	{
	$result=mysqli_query($this->dbh,"SELECT id,FullName from tblusers where Username='$uname' and Password='$pasword'");
	return $result;
	}


}
?>