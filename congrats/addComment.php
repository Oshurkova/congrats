<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST['name'];
    $comment = $_POST['comment'];
    $article = 1;
    $mysqli = new mysqli("localhost", "root", "", "first_db");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $sql = "INSERT INTO names (name) VALUES ('$name')";
    $lastInsertedId = mysqli_insert_id($mysqli);


    $sql1 = "INSERT INTO comment (text, name, article) VALUES ('$comment', '$lastInsertedId', '1')";
    if ($mysqli->query($sql) === TRUE) {
        echo "Created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    if ($mysqli->query($sql1) === TRUE) {
        echo "Created successfully!";
    } else {
        echo "Error: " . $sql1 . "<br>" . $mysqli->error;
    }
}
header("location: index.php"); 
?>