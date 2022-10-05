<?php
try{
    $con = new PDO('mysql:host=localhost;dbname=crud_php;charset=utf8','root',"");

}
catch(PDOException $e){
    echo 'Echec de'. $e->getMessage();
}

?>