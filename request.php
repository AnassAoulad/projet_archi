<?php

include 'database.php';

try{
  $db = new PDO('mysql:host=20.111.18.196;dbname=test', $user, $password);
}
catch (Exception $e){
  die('Erreur : '.$e->getMessage());
}

$request = $db->prepare('SELECT * FROM user');
$request->execute();
$mots=$request>fetch();

foreach ($mots as $mot){
  echo $mot['nom'];
}

?>