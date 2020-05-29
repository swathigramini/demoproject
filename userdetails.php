<?php
$conn = new mysqli('localhost','root','','test');
if($conn->connect->error){
    die('connectionfailed': .$conn->connect->error);
}else{
    $sql = "SELECT email from register";
    $result = $conn-> query($sql)

    if($result->num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>".$row["email"];
        }
    }
    else{
        echo "0 result";
    }
}
$conn-> close();
?>