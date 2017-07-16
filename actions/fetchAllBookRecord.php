<?php
require 'config/config.php';

class bookRecord extends Database{

    public function fetch_record(){

        //$sql="SELECT * FROM book";
        $sql="SELECT book.id,book.title, book.publisher,author.author_name as author FROM book
                INNER JOIN author ON book.author_id = author.id
                
                ";

        $stmt = $this->con->prepare($sql);
        $stmt->execute();

        $array=array();
        
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            $array[]=$row;
        }
        return $array;

    }

}

$bookRecord=new bookRecord;
$allBook=$bookRecord->fetch_record();
//echo '<pre/>';print_r($allBook);die;


?>