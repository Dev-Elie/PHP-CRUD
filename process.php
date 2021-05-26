<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '' , 'students') or die ('Unable to connect');

$id = 0;
$title = '';
$body = '';
$update = false;

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

// Select and display the existing record from the database
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result= $conn->query("SELECT * FROM posts WHERE id=$id");
    if (count($result)==1){
        $row = $result->fetch_array();
        $title = $row['title'];
        $body = $row['body'];
    }
}

// Update the selected record with the newly typed
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    $conn->query("UPDATE posts SET title = $title ,body=$body WHERE id = $id") or die ($conn->error());

    $_SESSION['message']="Post has been Updated !";
    $_SESSION['msg_type']="info";

    header("location:home.php");

}

?>
