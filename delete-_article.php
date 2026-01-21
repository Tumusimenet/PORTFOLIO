<?php
include 'session.php';
include 'connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    // Get image name to delete file from folder
    $res = mysqli_query($conn, "SELECT image FROM articles WHERE id=$id");
    $row = mysqli_fetch_assoc($res);
    if($row['image'] != "") { unlink("uploads/".$row['image']); }

    mysqli_query($conn, "DELETE FROM articles WHERE id=$id");
    header("location:manage_articles.php");
}
?>