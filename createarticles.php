<?php
include 'session.php';
include 'connect.php';

$message = "";

if(isset($_POST['submit'])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['contenttext']);

    // Handle Image
    $image = $_FILES['image']['name'];
    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $allowedtypes = array("jpg", "jpeg", "gif", "png"); // Added PNG support
    $tempname = $_FILES['image']['tmp_name'];
    $targetpath = "uploads/" . $image;

    if(in_array($ext, $allowedtypes)){
        if(move_uploaded_file($tempname, $targetpath)){
            $query = "INSERT INTO `articles`(`title`,`contenttext`,`image`) VALUES ('$title','$content','$image')";
            if(mysqli_query($conn, $query)){
                $message = "<div class='alert success'>Article published successfully! <a href='viewarticles.php'>View Articles</a></div>";
            } else {
                $message = "<div class='alert error'>Database Error: " . mysqli_error($conn) . "</div>";
            }
        } else {
            $message = "<div class='alert error'>Failed to move uploaded file. Check folder permissions.</div>";
        }
    } else {
        $message = "<div class='alert error'>Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write Article | Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        :root {
            --primary-blue: rgb(94, 149, 204);
            --dark-text: #1a1a1a;
            --light-bg: #f4f7f6;
            --white: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }

        body { background-color: var(--light-bg); display: flex; min-height: 100vh; }

        /* --- Sidebar (Synced with Admin) --- */
        .sidebar {
            width: 260px;
            background: var(--dark-text);
            color: white;
            display: flex;
            flex-direction: column;
            padding: 30px 20px;
            position: fixed;
            height: 100%;
        }

        .sidebar h2 { color: var(--primary-blue); margin-bottom: 40px; text-align: center; font-size: 1.5rem; }

        .sidebar-nav { list-style: none; flex: 1; }
        .sidebar-nav li { margin-bottom: 10px; }
        .sidebar-nav a {
            color: #ccc;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .sidebar-nav a:hover, .sidebar-nav a.active { background: var(--primary-blue); color: white; }
        .sidebar-nav i { margin-right: 15px; width: 20px; }

        /* --- Main Content --- */
        .main-content { margin-left: 260px; flex: 1; padding: 40px; }

        .form-container {
            background: white;
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        h1 { margin-bottom: 30px; color: var(--dark-text); font-size: 1.8rem; }

        .input-group { margin-bottom: 25px; }
        .input-group label { display: block; margin-bottom: 10px; font-weight: 600; color: #555; }
        
        .input-group input[type="text"], 
        .input-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background: #fcfcfc;
            font-size: 1rem;
            outline: none;
            transition: 0.3s;
        }

        .input-group input:focus, 
        .input-group textarea:focus { border-color: var(--primary-blue); background: #fff; }

        .input-group textarea { height: 250px; resize: vertical; }

        .file-input-wrapper {
            border: 2px dashed #ddd;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .file-input-wrapper:hover { border-color: var(--primary-blue); background: #f0f7ff; }

        .submit-btn {
            background: var(--primary-blue);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover { background: var(--dark-text); transform: translateY(-2px); }

        /* Alerts */
        .alert { padding: 15px; border-radius: 10px; margin-bottom: 25px; font-weight: 600; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }

        @media (max-width: 992px) {
            .sidebar { width: 80px; padding: 20px 10px; }
            .sidebar h2, .sidebar span { display: none; }
            .main-content { margin-left: 80px; }
        }
    </style>
</head>
<body>

    <aside class="sidebar">
        <h2>MT Admin</h2>
        <ul class="sidebar-nav">
            <li><a href="admin.php"><i class="fa-solid fa-gauge"></i> <span>Dashboard</span></a></li>
            <li><a href="createarticles.php" class="active"><i class="fa-solid fa-pen-nib"></i> <span>New Article</span></a></li>
            <li><a href="viewarticles.php"><i class="fa-solid fa-eye"></i> <span>View Articles</span></a></li>
            <li><a href="home.php"><i class="fa-solid fa-globe"></i> <span>View Site</span></a></li>
        </ul>
    </aside>

    <main class="main-content">
        <div class="form-container">
            <h1>Create New Article</h1>
            
            <?php echo $message; ?>

            <form method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label>Article Title</label>
                    <input type="text" name="title" placeholder="Enter a catchy title..." required>
                </div>

                <div class="input-group">
                    <label>Content</label>
                    <textarea name="contenttext" placeholder="Write your story here..." required></textarea>
                </div>

                <div class="input-group">
                    <label>Cover Image</label>
                    <div class="file-input-wrapper" onclick="document.getElementById('image').click()">
                        <i class="fa-solid fa-cloud-arrow-up" style="font-size: 2rem; color: var(--primary-blue);"></i>
                        <p style="margin-top: 10px;">Click to upload image (JPG, PNG)</p>
                        <input type="file" name="image" id="image" accept="image/*" required style="display:none;">
                    </div>
                </div>

                <button type="submit" name="submit" class="submit-btn">Publish Article</button>
            </form>
        </div>
    </main>

    <script>
        // Optional: Show filename after selection
        document.getElementById('image').onchange = function() {
            const fileName = this.files[0].name;
            document.querySelector('.file-input-wrapper p').innerHTML = "Selected: <b>" + fileName + "</b>";
        };
    </script>
</body>
</html>