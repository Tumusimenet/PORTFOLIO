<?php
// PHP logic remains at the top
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements | Mwesigye Thomas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <style>
        :root {
            --primary-blue: rgb(94, 149, 204);
            --hover-blue: #87ceeb; 
            --dark-text: #1a1a1a;
            --light-bg: #f4f7f6;
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
        }

        /* --- Global Container --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- Navigation (Matched to Home) --- */
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

        /* --- Achievements Section --- */
        .page-title {
            text-align: center;
            padding: 60px 0 40px;
        }

        .page-title h1 {
            font-size: 3rem;
            color: var(--dark-text);
            margin-bottom: 10px;
        }

        .page-title .underline {
            width: 80px;
            height: 5px;
            background: var(--primary-blue);
            margin: 0 auto;
            border-radius: 10px;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 30px;
            padding-bottom: 80px;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(94, 149, 204, 0.1);
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: 0.3s;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(94, 149, 204, 0.15);
        }

        .card i {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
        }

        .card h2 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary-blue);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .card p {
            font-size: 1.05rem;
            color: #555;
            flex-grow: 1;
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
                background: white;
                flex-direction: column;
                justify-content: center;
                transition: 0.4s ease;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }

            .nav-list.active { right: 0; }
            .nav-list li { margin: 20px 0; }

            .achievements-grid {
                grid-template-columns: 1fr;
            }

            .page-title h1 { font-size: 2.5rem; }
        }

        @media (max-width: 480px) {
            .card { padding: 30px 20px; }
            .page-title h1 { font-size: 2rem; }
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
        <div class="page-title">
            <h1>Milestones & Achievements</h1>
            <div class="underline"></div>
        </div>

        <section class="achievements-grid">
            <div class="card">
                <i class="fa-solid fa-briefcase"></i>
                <h2>Professional Experience</h2>
                <p>Currently serving as <strong>Project Manager</strong> at the FICCARS program. I lead financial inclusion in energy initiatives, manage multidisciplinary teams, and drive strategic stakeholder engagement to ensure impactful outcomes.</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-users-gear"></i>
                <h2>Leadership Roles</h2>
                <p>As an <strong>Executive Commissioner</strong> at the Rwanda National Youth Council, I provide strategic leadership for youth initiatives in higher learning institutions, advocating for policy development in education and employment.</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-certificate"></i>
                <h2>Certifications</h2>
                <p>Certified by the <strong>Project Management Institute (PMI)</strong>. Additionally, I hold specialized certification in Monitoring, Evaluation, Accountability, and Learning (MEAL) from Humentum.</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-graduation-cap"></i>
                <h2>Education</h2>
                <p>Holds a <strong>Master of Science in Project Management & Planning</strong> and a Bachelor's degree in Business Digital Communications, both awarded by Mount Kigali University.</p>
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