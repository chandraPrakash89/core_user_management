<?php
session_start();
require '../config/config.php';

if(isset($_SESSION['searchedBook'])){
      unset($_SESSION['searchedBook']);
}
class deleteBook extends Database{

    public function delete_record($id){
        $sql="Delete from book where id=:id";
        $delete_stmt=$this->con->prepare($sql);
        $delete_stmt->bindParam(':id', $id, PDO::PARAM_INT);   
        $delete_stmt->execute();

        if($delete_stmt){
            $location="../welcome.php";
            $message="Book has been successfully deleted";
            header("Location: $location?message=$message");
        }
        else{
            $location="../welcome.php";
            $message="something went wrong!";
            header("Location: $location?error_msg=$message");

        }
    



    }
}
$obj=new deleteBook;

if(isset($_GET['id'])){
    $id=$_GET['id'] ?? null;

}

$obj->delete_record($id);