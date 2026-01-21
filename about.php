<?php
// PHP logic can stay here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Mwesigye Thomas</title>
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

        /* --- Layout --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- Navigation (Consistent across all pages) --- */
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
            letter-spacing: 1px;
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
            transition: 0.3s;
        }

        .nav-btn:hover { background: var(--dark-text); }

        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--primary-blue);
            cursor: pointer;
            z-index: 1100;
        }

        /* --- About Section --- */
        .about-section {
            padding: 80px 0;
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
        }

        .about-card {
            display: flex;
            align-items: stretch;
            background: white;
            border-radius: 30px;
            overflow: hidden;
            border: 1px solid rgba(94, 149, 204, 0.1);
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            width: 100%;
        }

        .about-image {
            flex: 1;
            background: #eef2f3;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .about-image img {
            width: 100%;
            max-width: 350px;
            aspect-ratio: 1/1;
            object-fit: cover;
            border-radius: 20px;
            border: 8px solid white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .about-content {
            flex: 1.2;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .about-content h3 {
            color: var(--primary-blue);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .about-content h1 {
            font-size: 3rem;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .about-content p {
            font-size: 1.1rem;
            color: #444;
            margin-bottom: 20px;
        }

        .cta-btn {
            display: inline-block;
            align-self: flex-start;
            padding: 15px 35px;
            background: var(--primary-blue);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 700;
            transition: 0.3s;
            margin-top: 10px;
            box-shadow: 0 8px 15px rgba(94, 149, 204, 0.2);
        }

        .cta-btn:hover {
            background: var(--dark-text);
            transform: translateY(-3px);
        }

        /* --- Responsive Styles --- */
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
                z-index: 1000;
            }

            .nav-list.active { right: 0; }
            .nav-list li { margin: 20px 0; }

            .about-card {
                flex-direction: column;
            }

            .about-image {
                padding: 40px 20px;
            }

            .about-content {
                padding: 40px 30px;
                text-align: center;
            }

            .cta-btn {
                align-self: center;
            }
        }

        @media (max-width: 480px) {
            .about-content h1 { font-size: 2.2rem; }
            .about-image img { max-width: 250px; }
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
        <section class="about-section">
            <div class="about-card">
                <div class="about-image">
                    <img src="amos.jpg" alt="Mwesigye Thomas">
                </div>
                
                <div class="about-content">
                    <h3>Biography</h3>
                    <h1>About Me</h1>
                    <p>Hi, I'm <strong>Mwesigye Thomas</strong>, a dedicated Project Manager at the FICCARS Program. My expertise lies in leading financial inclusion initiatives, managing multidisciplinary teams, and ensuring impactful outcomes in the energy sector.</p>
                    <p>Beyond my corporate role, I am honored to serve as an <strong>Executive Commissioner</strong> at the Rwanda National Youth Council. In this capacity, I advocate for youth empowerment and strategic policy development, specifically focusing on education and employment opportunities for the next generation.</p>
                    
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
            const icon = menuToggle.querySelector('i');
            if (navList.classList.contains('active')) {
                icon.classList.replace('fa-bars', 'fa-xmark');
            } else {
                icon.classList.replace('fa-xmark', 'fa-bars');
            }
        });

        // Close menu on link click
        document.querySelectorAll('.nav-list li a').forEach(link => {
            link.addEventListener('click', () => {
                navList.classList.remove('active');
                menuToggle.querySelector('i').classList.replace('fa-xmark', 'fa-bars');
            });
        });
    </script>
</body>
</html>