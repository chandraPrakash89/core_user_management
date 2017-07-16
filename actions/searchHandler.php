<?php
session_start();
require '../config/config.php';
if(isset($_SESSION['searchedBook'])){
      unset($_SESSION['searchedBook']);
}

class searchBook extends Database{

    public function search_book($title,$authorId,$publisher){
       // $sql="SELECT * FROM book WHERE title Like Concat('%',:title,'%') AND author Like Concat('%',:author,'%') AND publisher Like Concat('%',:publisher,'%')";
        $sql="SELECT book.title,book.publisher,author.author_name as author
               FROM book
               JOIN author ON author.id = book.author_id
               WHERE(book.title LIKE Concat('%',:title,'%') AND book.publisher LIKE Concat('%',:publisher,'%') AND author.id LIKE Concat('%',:authorId,'%') ) 
                ";
        
        $stmt = $this->con->prepare($sql);

        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':authorId', $authorId);
        $stmt->bindValue(':publisher', $publisher);
        
        $stmt->execute();

        $array=array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            $array[]=$row;
        }
        //echo '<pre/>';print_r($array);die;
         if(!empty($array)){
            $_SESSION['searchedBook'] = $array; 
            $location="../welcome.php";
            $message="Book has been successfully found";
            header("Location: $location?message=$message");
        }
        else{
            $location="../welcome.php";
            $message="There is no Book for entered details!";
            header("Location: $location?error_msg=$message");

        }


    }


}
if(isset($_POST['submit'])){
//echo '<pre/>';print_r($_POST);die;
$title=$_POST['title'];
$authorId=$_POST['author'];
$publisher=$_POST['publisher'];

$searchBook=new searchBook;
$allBook=$searchBook->search_book($title,$authorId,$publisher);
 
}
?>