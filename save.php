<!DOCTYPE html>
<html>

<head>
    <title>Save Info Page</title>
</head>
<?php include "includes/dbconn.php"; 
    /* Taking all 4 values from the form data(input)
     Performing insert query execution
     here our table name is college*/
    try{
    $sql = $PDO->prepare("INSERT INTO contact (name, email, phone, text)  VALUES(:name, :email, :phone, :text)");
    $sql->bindParam(':name',$name);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':phone',$phone);
    $sql->bindParam(':text',$text);
    $sql->execute();
    } catch (PDOException $exception){
        echo $exception->getMessage()."<br />";
    }

    header("Location: thanks.php");die()?>