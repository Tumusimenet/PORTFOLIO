<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        *{
            margin: 0;
            padding: 0;
            transition: 0.5s;
            overflow: ;
            font-family: Georgia, 'Times New Roman', Times, serif;
            box-sizing: border-box;
        }
        body{
            background-image: url(wone55.jpeg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .container-fluid{
            width: 100%;
            height: 90%;
            background: transparent;
           
        }
        .container{
            width: 1275px;
            height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-position: central;
            margin-left: 290px;
            
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
    
        a{
            text-decoration: none;
        }
        
        i{
            color: black;
            padding: 20px;
        }
        .box{
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: center;
            margin: ;
            justify-content: center;
            background: transparent;
            backdrop-filter: blur(60px);    

            
            
            
         
            
            
            
        }
        h2{
            font-size: 2em;
            border-bottom: 3px solid black;
            font-weight: bolder;
            width: 30%;
        }
        h2 span{
            font-weight: 100;

        }
        .dream{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            width: 32.5%;
            margin-left: 50px;
            
          
            
        }
        img{
            width: 400px;
            height: 400px;
            border: 2px ;
            border-radius: 10px;
            
            
           
        }
        .container-fluid .box{
            margin-left: 10px;  
            width: 100%;
        }
        .box .dream img{
            
            padding-bottom: 30px;

        }
        .button{
            margin-left: 930px;
        }
        @media screen and (max-width:940px){
            .container-fluid .box{
                flex-direction: column;
            }
            .dream{
                 width: 100%;
            
            
        }
    }
        
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <h2> PHOTO <span>Gallery</span></h2>
            <nav>
                <ul>
                <a href="home.php"><li>Home</li></a>
                    <a href="about.php"><li>About</li></a>
                    <a href="achievements.php"><li>achievements</li></a>
                    <a href="gallery.php"><li>gallery</li></a>
                    <a href="viewarticles.php"><li>articles</li></a>
                    <li><a href="contact.php"><button class="btn">contact</button></a></li>
                </ul>
            </nav>
        </div>
        <div class="box">
            <div class="dream">
                <img src="amos.jpg" alt="">
                <br>
                <img src="amos2.jpg" alt=""><br>
                <img src="nature2.jpg" alt="">
                <br>
                <img src="amos7.jpg.jpg" alt="">
                <br>
                <img src="nature.jpg" alt="">
                <br>
            </div>
            <div class="dream">
    <img src="conference.jpg" alt="">
    <br>
    <img src="duty.jpg" alt="">
    <br>
    <img src="amos9.jpg" alt="">
    <br>
    <img src="flight.jpg" alt="">
    <br>
    <img src="nature2.jpg" alt="">
    <br>
    

            </div>
            <div class="dream">
    <img src="amos10.jpeg" alt="">
    <br>
    <img src="amos2.jpg" alt="">
    <br>
    <img src="amos3.jpg" alt="">
    <br>
    <img src="auntie.jpg" alt="">
    <br>
    <img src="nature.jpg" alt="">
    <br>

            </div>
           
           
        </div>
      
            
<//div class="button">
<//a href="gallery2.php"><//button class="btn">more <//button></a>
        <//div>
            
        </div>

    
</body>
</html>
    

    <//div class="dream">
    <//img src="amos.jpg" alt="">
    <//img src="amos2.jpg" alt="">
    <//img src="amos3.jpg" alt="">
    <//img src="amos7.jpg.jpg" alt="">
    <//img src="nature.jpg" alt="">
    <//img src="lion1.jpg" alt="">
    <//img src="logo2.jpg" alt="">
            <//div>