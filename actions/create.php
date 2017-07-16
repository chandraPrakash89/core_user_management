<?php
require '../config/config.php';

class addBook extends Database{

    public function insert_book($title,$author,$publisher){
        $sql = "INSERT INTO book (title,author,publisher, created_at,updated_at) VALUES (:title, :author,:publisher,NOW(),NOW())";
        $stmt = $this->con->prepare($sql);
        
        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':author', $author);
        $stmt->bindValue(':publisher', $publisher);
       

        $result = $stmt->execute();

        if($result){
            
            $location="../welcome.php";
            $message="Book has been successfully created";
            header("Location: $location?message=$message");
        }
        else{
            $location="../welcome.php";
            $message="something went wrong!";
            header("Location: $location?error_msg=$message");

        }
    

    }

    


}

$bookObj=new addBook;
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $author=$_POST['author'];
    $publisher=$_POST['publisher'];

    $bookObj->insert_book($title,$author,$publisher);
}


?>