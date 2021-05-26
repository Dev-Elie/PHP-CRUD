<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '' , 'students') or die ('Unable to connect');

$title = '';
$body = '';

if (isset($_POST['post'])){
    $title = $_POST['title'];
    $body = $_POST['body'];

    $conn->query("INSERT INTO posts (title,body) VALUES ('$title','$body') ") or die ($conn->error());

    $_SESSION['message']="Post has been published";
    $_SESSION['msg_type']="success";

    header("location:home.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $conn->query("DELETE FROM posts where id = $id") or die ($conn->error());

    $_SESSION['message']="Post has been deleted !";
    $_SESSION['msg_type']="danger";

    header("location:home.php");

}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];

    $result= $conn->query("SELECT * FROM posts WHERE id=$id");
    if (count($result)==1){
        $row = $result->fetch_array();
        $title = $row['title'];
        $body = $row['body'];
    }
}

?>
