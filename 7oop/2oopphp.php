<?php
class SubjectClass 
{
public $name;
public function showDetail(){
return "Web Programming";
}
}
$MySite = new SubjectClass ();
$MySite->name = "localhost";
echo $MySite->name;
echo "<br />";
echo $MySite->showDetail();;
?>
