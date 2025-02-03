<?php

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            transition: 0.5s;
            overflow: hidden;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        body{  background-image: url(wone55.jpeg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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
            font-weight: 600;
            font-size: 25px;
        }
        a{
            text-decoration: none;
        }
        nav ul li:hover {
            color: lightskyblue;
        }
        .header button{
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
        nav{
            margin-left: 670px;

        }

        .image{
            padding-left: 140px;
        }
        .image img{
            border-radius: 50%;
            
        }
        .box-left{
            flex-basis:50%;
            padding: 30px 70px;
        
           

        }
        .box-right{
            flex-basis: 50%;
            padding: 80px;
            font-size: 30px;
            color: lightskyblue;

        }
        .box{
            display: flex;
            width: 1800px;
            padding-left: 30px;
            padding-top: 55px;
            border: 2px solid lightseagreen;
            border-radius: 10px;
            backdrop-filter: blur(20px);
            margin-left:30px;
            height:800px;
        }
        h3{
            color: lightseagreen;
            padding-left: 275px;
            font-size: 30px;
    
        }
          .box-right button{
            width: 120px;
            height: 45px;
            border-radius: 8px;
            border: none;
            background:lightseagreen ;
            color: white;
            cursor: pointer;
            font-size: 20px;
            margin-left: 275px;
            margin-top: 30px;

        }
        button:hover{
            background: white;
            color: lightseagreen;
        }
        



    </style>
</head>
<body>
    <div class="header">
         
    <nav>
                <ul>
                    <a href="home.php"><li>Home</li></a>
                    <a href="about.php"><li>About</li></a>
                    <a href="achievements.php"><li>achievements</li></a>
                    <a href="gallery.php"><li>gallery</li></a>
                    <a href="viewarticles.php"><li>articles</li></a>
                    <li><a href="contact.php"><button class="btn">contact  us</button></a></li>
                </ul>
            </nav>
    </div>


<div class="box">

        <div class="box-left">
            
            <form>
                <div class="image">
                    <img src="amos.jpg" alt="">
                </div>
            </form>
        </div>
        <div class="box-right">
        <h3>biography</h3>
            <p>MWESIGYE thomas is an experienced projects manager,monitor and evaluater,and youth advocate.known for leading impactfull initiatives in governmental and non governmental sectors paticullary in youth development and empowerment skilled in stake holder engagement,strategic planning and creating partnerships.currently he is working at FICCARS programme ,leading financial inclusion in the energy initiatives under FICCARS programme

            </p>
            <a href="contact.php"> <button>contact</button></a>
        </div>
        

    </div>


        
    



       
       
       

  
  
</body>
</html>