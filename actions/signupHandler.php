<?php

require '../config/config.php';

class Signup extends Database
{

    public function insert_reg($firstName,$lastName,$email,$password){
        
        //check if username already exists.
        $sql = "SELECT COUNT(email) AS num FROM user_registration WHERE email = :email";
        $stmt = $this->con->prepare($sql);
        
        //Bind
    
        $stmt->bindValue(':email', $email);
    
        
        //Execute.
        $stmt->execute();
        
        //Fetch the row.
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //If the provided username already exists - display error.
    
        if($row['num'] > 0){
            die('That username already exists!');
        }
        
        //Hash the password as we do NOT want to store our passwords in plain text.
        $passwordHash = $hash = password_hash($password, PASSWORD_DEFAULT);
        
        //Prepare our INSERT statement.
        //Remember: We are inserting a new row into our users table.
        $sql = "INSERT INTO user_registration (first_name,last_name,email, password) VALUES (:firstName, :lastName,:email,:password)";
        $stmt = $this->con->prepare($sql);
        
        $stmt->bindValue(':firstName', $firstName);
        $stmt->bindValue(':lastName', $lastName);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $passwordHash);
    
        //Execute the statement and insert the new account.
        $result = $stmt->execute();
        
        //If the signup process is successful.
        if($result){
            
            $location="../login.php";
            $message="Thank you for registering with us please login here";
            header("Location: $location?message=$message");
        }


    }
}

$signupObj = new Signup;

if(isset($_POST['submit'])){
    
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
   
    $signupObj->insert_reg($firstName,$lastName,$email,$password);
}    
    



   
    


?>
