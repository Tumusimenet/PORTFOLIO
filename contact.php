<?php
// PHP logic remains here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Mwesigye Thomas</title>
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

        /* --- Global Container --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- Navigation (EXACT same as Home/About) --- */
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

        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--primary-blue);
            cursor: pointer;
            z-index: 1100;
        }

        /* --- Contact Content Section --- */
        .page-content {
            padding: 80px 0;
            min-height: calc(100vh - 80px);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-card {
            display: flex;
            background: white;
            border-radius: 30px;
            overflow: hidden;
            border: 1px solid rgba(94, 149, 204, 0.1);
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        }

        /* Left Side: Contact Form */
        .form-side {
            flex: 1.5;
            padding: 60px;
        }

        .form-side h3 {
            color: var(--primary-blue);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .form-side h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .input-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .input-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #666;
            font-size: 0.9rem;
        }

        .input-group input, 
        .input-group textarea {
            padding: 15px;
            border: 1px solid #eee;
            border-radius: 12px;
            background: #fcfcfc;
            font-size: 1rem;
            transition: 0.3s;
        }

        .input-group input:focus, 
        .input-group textarea:focus {
            border-color: var(--primary-blue);
            background: #fff;
            outline: none;
            box-shadow: 0 0 10px rgba(94, 149, 204, 0.1);
        }

        .submit-btn {
            background: var(--primary-blue);
            color: white;
            border: none;
            padding: 18px 40px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background: var(--dark-text);
            transform: translateY(-3px);
        }

        /* Right Side: Contact Info (The Blue Part) */
        .info-side {
            flex: 1;
            background: var(--primary-blue);
            color: white;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info-side h2 {
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            font-size: 1.1rem;
        }

        .info-item i {
            font-size: 1.4rem;
            margin-right: 20px;
            width: 25px;
            text-align: center;
        }

        .social-box {
            margin-top: 40px;
            display: flex;
            gap: 20px;
        }

        .social-box a {
            color: white;
            font-size: 1.8rem;
            transition: 0.3s;
        }

        .social-box a:hover {
            transform: scale(1.2);
            color: var(--dark-text);
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
                background: var(--glass);
                backdrop-filter: blur(10px);
                flex-direction: column;
                justify-content: center;
                transition: 0.4s ease;
                z-index: 1000;
            }
            .nav-list.active { right: 0; }
            .nav-list li { margin: 20px 0; }

            .contact-card { flex-direction: column; }
            .input-row { grid-template-columns: 1fr; }
            .form-side, .info-side { padding: 40px 30px; }
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
                    <li><a href="gallery2.php">Gallery</a></li>
                    <li><a href="viewarticles.php">Articles</a></li>
                    <li><a href="contact.php" class="nav-btn">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container page-content">
        <div class="contact-card">
            <div class="form-side">
                <h3>Get in Touch</h3>
                <h1>Send a Message</h1>
                
                <form action="#">
                    <div class="input-row">
                        <div class="input-group">
                            <label>Full Name</label>
                            <input type="text" placeholder="Mwesigye Thomas">
                        </div>
                        <div class="input-group">
                            <label>Mobile Number</label>
                            <input type="text" placeholder="0786160338">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="mwesigyethomas@gmail.com">
                    </div>

                    <div class="input-group">
                        <label>Your Message</label>
                        <textarea rows="5" placeholder="How can I help you?"></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>

            <div class="info-side">
                <h2>Contact Info</h2>
                
                <div class="info-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>mwesigyethomas@gmail.com</span>
                </div>

                <div class="info-item">
                    <i class="fa-solid fa-phone"></i>
                    <span>0786160338</span>
                </div>

                <div class="info-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Ijuru Hub, Kimironko</span>
                </div>

                <div class="social-box">
                    <a href="https://instagram.com/mwesigye_thomas" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://facebook.com/MWESIGYE thomas" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://linkedin.com/in/Thomas-MWESIGYE" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://x.com/MWESIGYE thomas" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>
        </div>
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
    </script>
</body>
</html>