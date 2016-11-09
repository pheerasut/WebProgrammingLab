<?php
class user 
{
  private $id; 
  protected $user; 
  public function setMyName($input){ 
    $this->user = $input;
  }
  public function getMyName(){ 
    return $this->user;
  }
}
?>
 
<?php
$Student = new user();
$setName = "injectioline";
$Student->setMyName($setName);
$name = $Student->getMyName();
echo "My name is <em>".$name."</em>";
?>
