<?php
// PHP logic can stay here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mwesigye Thomas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <style>
        :root {
            --primary-blue: rgb(94, 149, 204);
            --hover-blue: #87ceeb; 
            --dark-text: #1a1a1a;
            --glass: rgba(255, 255, 255, 0.95);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background-color: #f4f7f6;
            color: var(--dark-text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* --- Layout --- */
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
            letter-spacing: 1px;
        }

        .nav-list {
            display: flex;
            list-style: none;
            align-items: center;
        }

        .nav-list li {
            margin-left: 30px;
        }

        .nav-list li a {
            text-decoration: none;
            color: var(--primary-blue);
            font-weight: 600;
            font-size: 1rem;
            transition: 0.3s;
        }

        .nav-list li a:hover {
            color: var(--hover-blue);
        }

        .nav-btn {
            background: var(--primary-blue);
            color: white !important;
            padding: 10px 22px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .nav-btn:hover {
            background: var(--dark-text);
            transform: translateY(-2px);
        }

        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--primary-blue);
            cursor: pointer;
            z-index: 1100;
        }

        /* --- Hero Section --- */
        .hero-section {
            padding: 80px 0;
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
        }

        .hero-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            padding: 60px;
            border-radius: 30px;
            border: 1px solid rgba(94, 149, 204, 0.2);
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            width: 100%;
        }

        .image-side {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .image-side img {
            width: 380px;
            height: 380px;
            object-fit: cover;
            border-radius: 50%;
            border: 10px solid var(--primary-blue);
            box-shadow: 0 10px 30px rgba(94, 149, 204, 0.3);
        }

        .content-side {
            flex: 1.2;
            padding-left: 60px;
        }

        .content-side h3 {
            color: var(--primary-blue);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 0.9rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .content-side h1 {
            font-size: 4.5rem;
            line-height: 1;
            margin-bottom: 25px;
            font-weight: 800;
        }

        .content-side p {
            font-size: 1.15rem;
            color: #444;
            margin-bottom: 35px;
            max-width: 550px;
        }

        /* --- Social & Buttons --- */
        .social-links {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
        }

        .social-links a {
            font-size: 1.8rem;
            color: var(--dark-text);
            transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .social-links a:hover {
            color: var(--primary-blue);
            transform: translateY(-5px);
        }

        .cta-btn {
            display: inline-block;
            padding: 18px 40px;
            background: var(--primary-blue);
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(94, 149, 204, 0.2);
        }

        .cta-btn:hover {
            background: var(--dark-text);
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(0,0,0,0.1);
        }

        /* --- Responsive Styles --- */
        @media (max-width: 1024px) {
            .content-side h1 { font-size: 3.5rem; }
            .image-side img { width: 300px; height: 300px; }
        }

        @media (max-width: 992px) {
            .menu-toggle { display: block; }

            .nav-list {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: var(--glass);
                backdrop-filter: blur(10px);
                flex-direction: column;
                justify-content: center;
                transition: 0.4s ease;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }

            .nav-list.active { right: 0; }

            .nav-list li { margin: 20px 0; }

            .hero-box {
                flex-direction: column;
                text-align: center;
                padding: 40px 20px;
            }

            .content-side {
                padding-left: 0;
                margin-top: 40px;
            }

            .content-side p { margin: 0 auto 30px auto; }

            .social-links { justify-content: center; }
        }

        @media (max-width: 480px) {
            .content-side h1 { font-size: 2.8rem; }
            .image-side img { width: 220px; height: 220px; }
            .hero-box { border-radius: 0; padding: 40px 10px; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <div class="logo">MT.</div>
                
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
        <section class="hero-section">
            <div class="hero-box">
                <div class="image-side">
                    <img src="amos.jpg" alt="Mwesigye Thomas">
                </div>
                
                <div class="content-side">
                    <h3>Connect With</h3>
                    <h1>Mwesigye<br>Thomas</h1>
                    <p>Mr. Thomas is a youth leader and businessperson from Rwanda. He prioritizes hard work and passion over talent, believing in continuous learning for growth. His favorite word is "Dream."</p>
                    
                    <div class="social-links">
                        <a href="https://instagram.com/mwesigye_thomas" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://facebook.com/MWESIGYE thomas" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://linked-in.com/Thomas MWESIGYE" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://x.com/Mwesigye thomas" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>

                    <a href="contact.php" class="cta-btn">Reach Out to Me</a>
                </div>
            </div>
        </section>
    </main>

    <script>
        const menuToggle = document.getElementById('mobile-menu');
        const navList = document.getElementById('nav-list');

        menuToggle.addEventListener('click', () => {
            navList.classList.toggle('active');
            
            // Toggle between Hamburger and X icon
            const icon = menuToggle.querySelector('i');
            if (navList.classList.contains('active')) {
                icon.classList.replace('fa-bars', 'fa-xmark');
            } else {
                icon.classList.replace('fa-xmark', 'fa-bars');
            }
        });

        // Close menu when a link is clicked
        document.querySelectorAll('.nav-list li a').forEach(link => {
            link.addEventListener('click', () => {
                navList.classList.remove('active');
                menuToggle.querySelector('i').classList.replace('fa-xmark', 'fa-bars');
            });
        });
    </script>

</body>
</html>