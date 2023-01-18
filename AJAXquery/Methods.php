<?php

  
try{
  $conn = new PDO ('mysql:host = 127.0.0.1;dbname = ajax_query','root','');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
  echo $e->getMessage();
  die();

}



$query = $conn ->query('SELECT * FROM ajax_query.personal_details');
$query2= $conn ->query('SELECT * FROM ajax_query.contact_details');
$query3 = $conn ->query('SELECT * FROM ajax_query.educational_details');

$query -> setFetchMode(PDO::FETCH_CLASS, 'Person');
 $query2 -> setFetchMode(PDO::FETCH_CLASS, 'Person');
 $query3 -> setFetchMode(PDO::FETCH_CLASS, 'Person');


while ($r= $query->fetch()) {
  
  echo $r->entry, ' ';

}
while ($r= $query2->fetch()) {
    echo $r->entry, ' ' ;

}while ($r= $query3->fetch()) {
  echo $r->entry,'' ;
}


class Person {

public $Name, $DOB,$ID, $Sex,$mobile_no,$college,$degree_course,$po_box,$entry;




         
   public function __construct(){

      $this->entry = "{$this->Name} {$this->DOB} {$this->Sex} {$this->mobile_no}
      {$this->college} {$this->degree_course} {$this->po_box}";
   }



          
  }




?>