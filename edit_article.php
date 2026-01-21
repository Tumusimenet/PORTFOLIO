<?php
include 'session.php';
include 'connect.php';

$id = mysqli_real_escape_string($conn, $_GET['id']);
$fetch = mysqli_query($conn, "SELECT * FROM articles WHERE article_id='$id'");
$data = mysqli_fetch_assoc($fetch);

if(isset($_POST['update'])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['contenttext']);
    
    if(!empty($_FILES['image']['name'])){
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/".$image);
        $sql = "UPDATE articles SET title='$title', contenttext='$content', image='$image' WHERE article_id='$id'";
    } else {
        $sql = "UPDATE articles SET title='$title', contenttext='$content' WHERE article_id='$id'";
    }
    
    if(mysqli_query($conn, $sql)){
        header("location:manage_articles.php?status=updated");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Article</title>
    <style>
        body { background: #f4f7f6; font-family: sans-serif; padding: 50px; }
        .edit-box { background: white; padding: 40px; border-radius: 20px; max-width: 700px; margin: auto; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        input, textarea { width: 100%; padding: 15px; margin: 15px 0; border: 1px solid #ddd; border-radius: 10px; font-size: 1rem; }
        button { background: rgb(94, 149, 204); color: white; border: none; padding: 15px 30px; border-radius: 10px; cursor: pointer; font-weight: bold; }
    </style>
</head>
<body>
    <div class="edit-box">
        <h2>Edit Article Content</h2>
        <form method="POST" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($data['title']); ?>" required>
            
            <label>Content</label>
            <textarea name="contenttext" rows="10" required><?php echo htmlspecialchars($data['contenttext']); ?></textarea>
            
            <label>Update Image (Optional)</label><br>
            <small>Current: <?php echo $data['image']; ?></small>
            <input type="file" name="image">
            
            <div style="margin-top:20px;">
                <button type="submit" name="update">Update Article</button>
                <a href="manage_articles.php" style="margin-left:15px; color:#888; text-decoration:none;">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>