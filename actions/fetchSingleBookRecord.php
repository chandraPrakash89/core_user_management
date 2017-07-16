<?php
session_start();
require '../config/config.php';

if(isset($_GET['id'])){
    $id=$_GET['id'] ?? null;

}

class Book extends Database{

    public function fetch_record($id){
        
        $sql="SELECT * FROM book WHERE id=$id";
        //echo $sql;die; 
        $stmt = $this->con->prepare($sql);
        
        $stmt->execute();

        $array=array();
        
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            $array[]=$row;
        }
        return($array);

    }

}

$book=new Book;
$recordBook=$book->fetch_record($id);
$_SESSION["title"] = $recordBook[0]["title"];
$_SESSION["author"] = $recordBook[0]["author"];
$_SESSION["publisher"] = $recordBook[0]["publisher"];
$_SESSION["book_id"] = $recordBook[0]["id"];



$loc = "../edit.php";
header("Location: " . $loc);
exit();



?>