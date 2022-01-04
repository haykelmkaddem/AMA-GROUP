<?php
function connect(){

$serveur='localhost';
$base='commercial';
$user='root';
$pass='1234';

try{
    $bd = new PDO("mysql:host=$serveur;dbname=$base",$user,$pass);
	
    return $bd;
}catch(PDOException $e){
    die('Erreur : '.$e->getMessage());
}

}

?>