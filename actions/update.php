<?php
require '../config/config.php';

class updateBook extends Database{

    public function update_book($title,$author,$publisher,$id){
    //   $sql = "UPDATE book SET title='meri', author='jung' WHERE id=1";
        $sql = "UPDATE book SET title=:title, author=:author, publisher=:publisher WHERE id=:id";
        $stmt = $this->con->prepare($sql);                                  
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);       
        $stmt->bindParam(':author', $author, PDO::PARAM_STR);    
        $stmt->bindParam(':publisher', $publisher, PDO::PARAM_STR);   
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);   
        $stmt->execute();

        
        if($stmt){
            $location="../welcome.php";
            $message="Book has been successfully updated";
            header("Location: $location?message=$message");
        }
        else{
            $location="../welcome.php";
            $message="something went wrong!";
            header("Location: $location?error_msg=$message");

        }
    

    }

    


}

$bookObj=new updateBook;
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $publisher=$_POST['publisher'];
    
    $bookObj->update_book($title,$author,$publisher,$id);
}


?>