<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
$website = trim(filter_input(INPUT_POST,"website",FILTER_SANITIZE_SPECIAL_CHARS));

if ($name == "" || $email == "" || $website == "") {
    echo "Please fill in the required fields: Name, Email and Website";
    header('Refresh: 2; URL=http://localhost/php%20reflection/extra.php');
    exit;
}
}

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
    echo "Thanks for your suggestion!";
    header('Refresh: 2; URL=http://localhost/php%20reflection/index.php');
    exit;
}