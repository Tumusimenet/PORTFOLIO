<?php 
include 'session.php'; 
include 'connect.php'; 

// --- DELETE LOGIC ---
if (isset($_GET['delete_id'])) {
    $del_id = mysqli_real_escape_string($conn, $_GET['delete_id']);
    
    // Get image name first to delete file from folder
    $res = mysqli_query($conn, "SELECT image FROM articles WHERE article_id='$del_id'");
    if ($row = mysqli_fetch_assoc($res)) {
        if (!empty($row['image'])) {
            @unlink("uploads/" . $row['image']);
        }
    }
    
    mysqli_query($conn, "DELETE FROM articles WHERE article_id='$del_id'");
    header("Location: manage_articles.php?status=deleted");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Articles | Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        :root {
            --primary: rgb(94, 149, 204);
            --dark: #1a1a1a;
            --bg: #f4f7f6;
            --danger: #e74c3c;
            --white: #ffffff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background: var(--bg); display: flex; min-height: 100vh; }

        /* Sidebar */
        .sidebar { width: 260px; background: var(--dark); color: white; padding: 30px 20px; position: fixed; height: 100%; }
        .sidebar h2 { color: var(--primary); margin-bottom: 40px; text-align: center; }
        .sidebar-nav { list-style: none; }
        .sidebar-nav a { color: #ccc; text-decoration: none; display: flex; align-items: center; padding: 12px; border-radius: 10px; margin-bottom: 8px; transition: 0.3s; }
        .sidebar-nav a:hover, .sidebar-nav a.active { background: var(--primary); color: white; }
        .sidebar-nav i { margin-right: 15px; width: 20px; }

        /* Content Area */
        .main-content { margin-left: 260px; flex: 1; padding: 40px; }
        .header-flex { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        
        .table-card { background: var(--white); border-radius: 20px; padding: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 15px; color: #888; border-bottom: 2px solid #f4f7f6; font-size: 0.8rem; text-transform: uppercase; }
        td { padding: 15px; border-bottom: 1px solid #f4f7f6; vertical-align: middle; }

        .thumb { width: 60px; height: 45px; object-fit: cover; border-radius: 6px; }
        
        /* Action Buttons */
        .btn-group { display: flex; gap: 8px; justify-content: flex-end; }
        .action-btn { width: 38px; height: 38px; display: flex; align-items: center; justify-content: center; border-radius: 8px; text-decoration: none; transition: 0.3s; }
        .edit { background: #e3f2fd; color: #1976d2; }
        .edit:hover { background: #1976d2; color: white; }
        .delete { background: #ffebee; color: var(--danger); }
        .delete:hover { background: var(--danger); color: white; }

        .msg { background: #d4edda; color: #155724; padding: 15px; border-radius: 10px; margin-bottom: 20px; border-left: 5px solid #28a745; }

        @media (max-width: 992px) {
            .sidebar { width: 80px; }
            .sidebar h2, .sidebar span { display: none; }
            .main-content { margin-left: 80px; }
        }
    </style>
</head>
<body>

    <aside class="sidebar">
        <h2>ADMIN</h2>
        <ul class="sidebar-nav">
            <li><a href="admin.php"><i class="fa-solid fa-gauge"></i> <span>Dashboard</span></a></li>
            <li><a href="articles.php"><i class="fa-solid fa-plus"></i> <span>New Post</span></a></li>
            <li><a href="manage_articles.php" class="active"><i class="fa-solid fa-tasks"></i> <span>Manage</span></a></li>
            <li><a href="index.php"><i class="fa-solid fa-house"></i> <span>Site</span></a></li>
        </ul>
    </aside>

    <main class="main-content">
        <div class="header-flex">
            <h1>Article Management</h1>
            <p><?php echo date('F d, Y'); ?></p>
        </div>

        <?php if(isset($_GET['status'])): ?>
            <div class="msg">Action completed successfully.</div>
        <?php endif; ?>

        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Using article_id for sorting
                    $sql = "SELECT * FROM `articles` ORDER BY article_id DESC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $aid = $row['article_id'];
                            $img = !empty($row['image']) ? "uploads/".$row['image'] : "https://via.placeholder.com/60";
                            
                            echo "<tr>
                                <td><img src='$img' class='thumb'></td>
                                <td><strong>".htmlspecialchars($row['title'])."</strong></td>
                                <td style='text-align: right;'>
                                    <div class='btn-group'>
                                        <a href='edit_article.php?id=$aid' class='action-btn edit'><i class='fa-solid fa-pen'></i></a>
                                        <a href='manage_articles.php?delete_id=$aid' class='action-btn delete' onclick='return confirm(\"Delete this article forever?\")'><i class='fa-solid fa-trash'></i></a>
                                    </div>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3' style='text-align:center; padding:40px; color:#999;'>No articles found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>