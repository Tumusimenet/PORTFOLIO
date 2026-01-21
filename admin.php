<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Mwesigye Thomas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        :root { --primary: rgb(94, 149, 204); --dark: #1a1a1a; --bg: #f4f7f6; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background: var(--bg); display: flex; min-height: 100vh; }
        
        .sidebar { width: 260px; background: var(--dark); color: white; padding: 30px 20px; position: fixed; height: 100%; }
        .sidebar h2 { color: var(--primary); margin-bottom: 40px; text-align: center; }
        .sidebar-nav { list-style: none; }
        .sidebar-nav a { color: #ccc; text-decoration: none; display: flex; align-items: center; padding: 12px; border-radius: 8px; margin-bottom: 10px; transition: 0.3s; }
        .sidebar-nav a:hover, .sidebar-nav a.active { background: var(--primary); color: white; }
        .sidebar-nav i { margin-right: 15px; width: 20px; }

        .main-content { margin-left: 260px; flex: 1; padding: 40px; }
        .action-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .action-box { background: white; padding: 30px; border-radius: 20px; text-decoration: none; color: var(--dark); display: flex; align-items: center; gap: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); transition: 0.3s; }
        .action-box:hover { transform: translateY(-5px); border-left: 5px solid var(--primary); }
        .action-box i { font-size: 2.5rem; color: var(--primary); }
    </style>
</head>
<body>
    <aside class="sidebar">
        <h2>MT Admin</h2>
        <ul class="sidebar-nav">
            <li><a href="admin.php" class="active"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
            <li><a href="createarticles.php"><i class="fa-solid fa-plus"></i> New Article</a></li>
            <li><a href="manage_articles.php"><i class="fa-solid fa-list-check"></i> Manage Articles</a></li>
            <li><a href="index.php"><i class="fa-solid fa-globe"></i> Visit Site</a></li>
        </ul>
        <a href="logout.php" style="margin-top:20px; display:block; text-align:center; color:#e74c3c; text-decoration:none;">Logout</a>
    </aside>

    <main class="main-content">
        <h1>Dashboard Overview</h1><br>
        <div class="action-grid">
            <a href="createarticles.php" class="action-box">
                <i class="fa-solid fa-file-pen"></i>
                <div><h4>Write Article</h4><p>Create and publish new content.</p></div>
            </a>
            <a href="manage_articles.php" class="action-box">
                <i class="fa-solid fa-list-check"></i>
                <div><h4>Edit / Delete</h4><p>Modify or remove existing posts.</p></div>
            </a>
        </div>
    </main>
</body>
</html>