<?php

 include 'includes/person.inc.php';

?>
<?php
  
 //object
 $person3 = new Person("Poppy","Hazel",3);
 echo $person3->name;
 echo $person3->eyeColor;
 echo $person3->age;

?>