<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Mwesigye Thomas</title>
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

        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--primary-blue);
            cursor: pointer;
        }

        /* --- Gallery Section --- */
        .gallery-header {
            text-align: center;
            padding: 60px 0 40px;
        }

        .gallery-header h1 {
            font-size: 3rem;
            color: var(--dark-text);
        }

        .gallery-header span {
            color: var(--primary-blue);
            font-weight: 300;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            padding-bottom: 80px;
        }

        .image-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            transition: 0.3s;
            position: relative;
        }

        .image-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(94, 149, 204, 0.2);
        }

        .image-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            display: block;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(94, 149, 204, 0.9);
            padding: 20px;
            text-align: center;
            transform: translateY(100%);
            transition: 0.3s ease;
        }

        .image-card:hover .overlay {
            transform: translateY(0);
        }

        .overlay a {
            color: white;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        /* --- Lightbox --- */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 2000;
            padding: 20px;
        }

        .lightbox:target { display: flex; }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
        }

        .lightbox-content img {
            max-width: 100%;
            max-height: 85vh;
            border-radius: 10px;
            box-shadow: 0 0 50px rgba(0,0,0,0.5);
        }

        .close-btn {
            position: absolute;
            top: -50px;
            right: 0;
            color: white;
            font-size: 2.5rem;
            text-decoration: none;
        }

        /* --- Mobile Responsive --- */
        @media (max-width: 992px) {
            .menu-toggle { display: block; }

            .nav-list {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: white;
                flex-direction: column;
                justify-content: center;
                transition: 0.4s ease;
                z-index: 1000;
            }

            .nav-list.active { right: 0; }
            .nav-list li { margin: 20px 0; }
            
            .gallery-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <a href="index.php" class="logo">MT.</a>
                <div class="menu-toggle" id="mobile-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul class="nav-list" id="nav-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="achievements.php">Achievements</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="viewarticles.php">Articles</a></li>
                    <li><a href="contact.php" class="nav-btn">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="gallery-header">
            <h1>Photo <span>Gallery</span></h1>
        </div>

        <div class="gallery-grid">
            <div class="image-card">
                <img src="wone.jpeg" alt="Image 1">
                <div class="overlay"><a href="#lb1">View Clearly</a></div>
            </div>
            <div class="image-card">
                <img src="amos2.jpg" alt="Image 2">
                <div class="overlay"><a href="#lb2">View Clearly</a></div>
            </div>
            <div class="image-card">
                <img src="amos7.jpg.jpg" alt="Image 3">
                <div class="overlay"><a href="#lb3">View Clearly</a></div>
            </div>

            <div class="image-card">
                <img src="conference.jpg" alt="Image 4">
                <div class="overlay"><a href="#lb4">View Clearly</a></div>
            </div>
            <div class="image-card">
                <img src="conference2.jpg" alt="Image 5">
                <div class="overlay"><a href="#lb5">View Clearly</a></div>
            </div>
            <div class="image-card">
                <img src="amos3.jpg" alt="Image 6">
                <div class="overlay"><a href="#lb6">View Clearly</a></div>
            </div>

            <div class="image-card">
                <img src="meee2.jpg" alt="Image 7">
                <div class="overlay"><a href="#lb7">View Clearly</a></div>
            </div>
            <div class="image-card">
                <img src="nature.jpg" alt="Image 8">
                <div class="overlay"><a href="#lb8">View Clearly</a></div>
            </div>
            <div class="image-card">
                <img src="nature2.jpg" alt="Image 9">
                <div class="overlay"><a href="#lb9">View Clearly</a></div>
            </div>
        </div>
    </main>

    <div id="lb1" class="lightbox"><div class="lightbox-content"><a href="#" class="close-btn">&times;</a><img src="wone.jpeg"></div></div>
    <div id="lb2" class="lightbox"><div class="lightbox-content"><a href="#" class="close-btn">&times;</a><img src="amos2.jpg"></div></div>
    <div id="lb3" class="lightbox"><div class="lightbox-content"><a href="#" class="close-btn">&times;</a><img src="amos7.jpg.jpg"></div></div>
    <div id="lb4" class="lightbox"><div class="lightbox-content"><a href="#" class="close-btn">&times;</a><img src="conference.jpg"></div></div>
    <div id="lb5" class="lightbox"><div class="lightbox-content"><a href="#" class="close-btn">&times;</a><img src="conference2.jpg"></div></div>
    <div id="lb6" class="lightbox"><div class="lightbox-content"><a href="#" class="close-btn">&times;</a><img src="amos3.jpg"></div></div>
    <div id="lb7" class="lightbox"><div class="lightbox-content"><a href="#" class="close-btn">&times;</a><img src="meee2.jpg"></div></div>
    <div id="lb8" class="lightbox"><div class="lightbox-content"><a href="#" class="close-btn">&times;</a><img src="nature.jpg"></div></div>
    <div id="lb9" class="lightbox"><div class="lightbox-content"><a href="#" class="close-btn">&times;</a><img src="nature2.jpg"></div></div>

    <script>
        const menuToggle = document.getElementById('mobile-menu');
        const navList = document.getElementById('nav-list');

        menuToggle.addEventListener('click', () => {
            navList.classList.toggle('active');
            const icon = menuToggle.querySelector('i');
            if (navList.classList.contains('active')) {
                icon.classList.replace('fa-bars', 'fa-xmark');
            } else {
                icon.classList.replace('fa-xmark', 'fa-bars');
            }
        });
    </script>
</body>
</html>