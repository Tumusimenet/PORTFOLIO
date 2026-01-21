<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $contact=$_POST['contact'];
    
    // Safety Note: In a real production environment, use Prepared Statements to prevent SQL injection
    $sql="SELECT * FROM `admin` WHERE `username`='$name' AND `password`='$pass' AND `contact`='$contact'";
    $query=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($query)>0){
        $row=mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['login']=$row['username'];
        header("location:admin.php");
        exit();
    } else {
        $error = "Invalid credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Mwesigye Thomas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <style>
        :root {
            --primary-blue: rgb(94, 149, 204);
            --hover-blue: #87ceeb; 
            --dark-text: #1a1a1a;
            --light-bg: #f4f7f6;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f4f7f6 0%, #e0e7ef 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* --- Login Card --- */
        .login-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 50px 40px;
            width: 100%;
            max-width: 400px;
            border-radius: 25px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.5);
            text-align: center;
        }

        .login-card h2 {
            font-size: 2rem;
            color: var(--primary-blue);
            margin-bottom: 10px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .login-card p {
            color: #777;
            margin-bottom: 30px;
            font-size: 0.9rem;
        }

        /* --- Input Styling --- */
        .input-group {
            position: relative;
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-blue);
            font-size: 1.1rem;
        }

        .input-group input {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 1px solid #eee;
            border-radius: 12px;
            background: #f9f9f9;
            font-size: 1rem;
            outline: none;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: var(--primary-blue);
            background: #fff;
            box-shadow: 0 0 10px rgba(94, 149, 204, 0.1);
        }

        /* --- Button Styling --- */
        .login-btn {
            width: 100%;
            padding: 15px;
            background: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
            box-shadow: 0 8px 15px rgba(94, 149, 204, 0.2);
        }

        .login-btn:hover {
            background: var(--dark-text);
            transform: translateY(-3px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.15);
        }

        .error-msg {
            color: #e74c3c;
            background: #fdeaea;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 0.85rem;
            display: inline-block;
            width: 100%;
        }

        .back-link {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            color: #999;
            font-size: 0.85rem;
            transition: 0.3s;
        }

        .back-link:hover {
            color: var(--primary-blue);
        }

        @media (max-width: 480px) {
            .login-card {
                width: 90%;
                padding: 40px 25px;
            }
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>Admin Login</h2>
        <p>Enter your credentials to manage content</p>

        <?php if(isset($error)): ?>
            <div class="error-msg">
                <i class="fa-solid fa-circle-exclamation"></i> <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="input-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="input-group">
                <i class="fa-solid fa-phone"></i>
                <input type="text" name="contact" placeholder="Contact Number" required>
            </div>

            <button type="submit" name="submit" class="login-btn">Login to Dashboard</button>
        </form>

        <a href="index.php" class="back-link"><i class="fa-solid fa-arrow-left"></i> Back to Website</a>
    </div>

</body>
</html>