<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles | Mwesigye Thomas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <style>
        :root {
            --primary-blue: rgb(94, 149, 204);
            --hover-blue: #87ceeb; 
            --dark-text: #1a1a1a;
            --light-bg: #f4f7f6;
            --glass: rgba(255, 255, 255, 0.95);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, -apple-system, sans-serif;
        }

        body {
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- Navigation --- */
        header {
            height: 80px;
            display: flex;
            align-items: center;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .logo {
            font-size: 1.5rem;
            color: var(--primary-blue);
            font-weight: 800;
            text-decoration: none;
        }

        .nav-list {
            display: flex;
            list-style: none;
            align-items: center;
        }

        .nav-list li { margin-left: 30px; }

        .nav-list li a {
            text-decoration: none;
            color: var(--primary-blue);
            font-weight: 600;
            transition: 0.3s;
        }

        .nav-list li a:hover { color: var(--hover-blue); }

        .nav-btn {
            background: var(--primary-blue);
            color: white !important;
            padding: 10px 22px;
            border-radius: 8px;
        }

        /* --- Articles Header --- */
        .articles-header {
            text-align: center;
            padding: 60px 0 40px;
        }

        .articles-header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .underline {
            width: 60px;
            height: 4px;
            background: var(--primary-blue);
            margin: 0 auto;
            border-radius: 10px;
        }

        /* --- Article Cards --- */
        .articles-container {
            flex: 1;
            padding-bottom: 40px;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .article-card {
            background: white;
            padding: 40px;
            border-radius: 25px;
            border: 1px solid rgba(94, 149, 204, 0.1);
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        }

        .article-card h2 {
            color: var(--primary-blue);
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .article-content {
            display: flex;
            gap: 30px;
        }

        .article-content img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
        }

        .article-text {
            flex: 1;
            font-size: 1.1rem;
            color: #444;
        }

        /* --- Admin Dashboard Link --- */
        .admin-footer {
            padding: 40px 0;
            text-align: center;
        }

        .admin-link {
            color: #ccc; /* Subtle color */
            text-decoration: none;
            font-size: 0.85rem;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .admin-link:hover {
            color: var(--primary-blue);
        }

        /* --- Mobile Responsive --- */
        @media (max-width: 992px) {
            .article-content { flex-direction: column; }
            .article-content img { width: 100%; height: auto; }
            .nav-list { display: none; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <a href="index.php" class="logo">MT.</a>
                <ul class="nav-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="achievements.php">Achievements</a></li>
                    <li><a href="gallery2.php">Gallery</a></li>
                    <li><a href="viewarticles.php">Articles</a></li>
                    <li><a href="contact.php" class="nav-btn">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="articles-header">
            <h1>Featured Articles</h1>
            <div class="underline"></div>
        </div>

        <div class="articles-container">
            <?php
            $sql = "SELECT * FROM `articles`";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="article-card">';
                    echo '<h2>' . htmlspecialchars($row['title']) . '</h2>';
                    echo '<div class="article-content">';
                    if (!empty($row['image'])) {
                       echo '<img src="uploads/' . htmlspecialchars($row['image']) . '" alt="Article Image">';
                    }
                    echo '<div class="article-text">' . nl2br(htmlspecialchars($row['contenttext'])) . '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div style="text-align:center; padding: 50px; color: #888;">No articles found.</div>';
            }
            ?>
        </div>

        <footer class="admin-footer">
            <a href="login.php" class="admin-link">
                <i class="fa-solid fa-lock"></i> Manage Content
            </a>
        </footer>
    </main>

</body>
</html>