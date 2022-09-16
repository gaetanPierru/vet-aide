<?php
require "configdb.php";
try{
  $PDO = new PDO ("$driver:host=$host;dbname=$dbname",$user,$pass);
}catch(PDOexception $e){
  die("Error :".$e->getMessage());
}

?>