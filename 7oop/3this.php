<?php
class user
{
protected $userName;
protected $password;
public function setUserName(){ 
$this->userName = "administrator"; 
$this->password = "adminpass001";
}
public function getUser(){
$resultText = "ชื่อบัญชี : $this->userName"; 
$resultText .= "<br />";
$resultText .= "รหัสผ่าน : $this->password"; 
return $resultText;
}
}
?>
<?php
$Customer= new user(); 
$Customer->setUserName(); 
echo $Customer->getUser(); 
?>
