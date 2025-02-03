<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        *{
            margin: 0;
            padding: 0;
            transition: 0.5s;
            overflow: hidden;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        body{
            background-image: url(wone55.jpeg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: ;
            background-size: ;
            
        
        }
        .container-fluid{
            width: 85%;
            height: 990px;
            background: linear-gradient(to left, rgba(0,0,0,0)50%, 
            rgba(0,0,0,0.5)50%),url() center ;
            background-repeat: no-repeat;
        }
        .container{
            width: 1650px;
            height: 80px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo{
            color: white;
            cursor: pointer;
        }
        nav ul{
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
          
        }
        nav ul li{
            margin-right: 30px;
            cursor: pointer;
            color: lightseagreen;
            font-weight: 1000;
            font-size: 25px;
        }
        .active a{
            color: lightseagreen;
        }
        .active:hover{
            color: lightskyblue;

        }
        nav ul li:hover {
            color: lightskyblue;
        }
        
        .btn{
            width: 120px;
            height: 45px;
            border-radius: 8px;
            border: none;
            background:lightseagreen ;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }
        .btn:hover{
            background: white;
            color: lightseagreen;
        }
        .content{
            width: 900px;
            height: 100vh;
            margin-left:100px;
        }
        .content h3{
            color: lightblue;
            font-weight: 400;
            padding-top: 100px;
        }
        .content h1{
            font-size: 80px;
            color: #fff;
            margin-top: 20px;
            line-height: 75px;
        }
        .content p{
            color: #f1f1f1;
            font-size: 16px;
            margin-top: 30px;
            line-height: 30px;
            letter-spacing: 1px;
        }
        .content .btn{
            margin-top: 20px;
            width: 150px;
            height: 50px;
            font-size: 16px;
            letter-spacing: 1px;
            background: #058283;
            color:lightskyblue;
        }
        .content .btn:hover{
            background: #fff;
            color: #058283;
        }
        .content  .btn2{
            border: 2px solid#058283;
            color: #fff;
            margin-left: 10px;
            background: transparent;
            
        }
        .content  .btn2:hover{
            background: #058283;
            color: lightblue;
        }
        .content h3{
            font-weight: 700;

        }
        a{
            text-decoration: none;
        }
        .footer{
            background: ;
            height: 10%;
            margin-top: 40px;
            padding: 30px;
            display: flex;
            width: 300px;
            font-size: 20px;
            padding: 10px;
        }
        i{
            color: black;
            padding: 20px;
        }
        
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <h2 class="logo"></h2>
            <nav>
                <ul>
                    <li class="active"><a href="home.php">Home</a></li>
                    <a href="about.php"><li>About</li></a>
                    <a href="achievements.php"><li>achievements</li></a>
                    <a href="gallery.php"><li>gallery</li></a>
                    <a href="viewarticles.php"><li>articles</li></a>
                    <li><a href="contact.php"><button class="btn">contact</button></a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <h3>CONNECT WITH MWESIGYE</h3>
            <h1>Mwesigye<br>thomas</h1>
            <p>Engage with the Rwanda National Youth Delegate and Chairperson Candidate at
                <br>
                Common Wealth Youth Council
            </p>
            <div class="footer">
        
                 </li> <a href="https://instagram.com/mwesigye_thomas"><i class="fa-brands fa-square-instagram"><p></p></i></a><br>
                   <a href="https://facebook.com/MWESIGYE thomas"><i class="fa-brands fa-square-facebook"><p></p></i></a><br>
                   <a href="https://linked-in.com/Thomas MWESIGYE"><i class="fa-brands fa-linkedin-in"><p></p></i></a><br>
                   <a href="https://x.com/Mwesigye thomas"></a><i class="fa-brands fa-x-twitter"><p></p></i><br>
                   
    
        </div>
        <div class="button">
        <a href="contact.php"><button class="btn">reach out </button></a>
        </div>
            
        </div>

    
</body>
</html>