<?php
class magicNow
{
   protected $myData;
   public function setData($setData){
      $this->myData = $setData;
   }
   public function getData(){
      return $this->myData; 
   }
}
$obj= new magicNow();
$data="123456";
$obj->setData($data);
$show=$obj->getData();
echo $show;
?>
