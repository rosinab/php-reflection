<?php
$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];



//Database Connection
$connect = new mysqli("localhost", "root", "", "reflection");
if($connect->connect_error){
    die('Connection Failed : '.$connect->connect_error);
} else{
    $stmt = $connect->prepare("insert into requests(name, email, website)
                            values(?, ?, ?)");
    $stmt->bind_param("sss",$name, $email, $website);
    $stmt->execute();    
    $stmt->close();
    $connect->close();
    header("Location: http://localhost/php%20reflection/index.php");
    echo "Thanks for your suggestion!";
    exit;
}