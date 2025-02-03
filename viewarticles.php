<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>articles</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        body{
           
            font-size: 14px;
            background-image: url(wone55.jpeg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            
        }
        .container{
            width:80%;
            margin: 50px;
            height: 1000px;
          
           
        }
        .menu{
            margin-left: 650px;
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
            font-weight: 1000;
            font-size: 25px;
            color: lightseagreen;
            text-decoration: none;
        }
        nav ul button{
            margin-top: 20px;
            width: 150px;
            height: 45px;
            font-size: 16px;
            letter-spacing: 1px;
            background: lightseagreen;
            color:white;
            font-size: 20px;
            border: 2px solid lightseagreen;
            border-radius: 10px;
        }
        
        a{
            text-decoration: none;  
        }
        button:hover{
            background: white;
            color: #058283;
            border: white;
        }
        nav ul li:hover {
            color: lightskyblue;
        }
    
        button:hover{
            background: white;
            color:lightseagreen;
        }
        @media screen and (max-width:940px){
            .container{
                display: flex;
                flex-direction: column;

            }
            .article{
                width: 85%;
                display: ;
            } 
        }
        input{
        background: lightseagreen;
        color: white;
        width: 300px;
        height: 30px;
        border: 2px solid lightseagreen;
        border-radius: 10px;
        font-size: 20px;
        
        
        } 
        input::placeholder{
        color: white;

        }
        h1{
            color: lightskyblue;
        }  
        .article{
            width: 80%;
            
            
            
           
           
        }

        .button button{
            width: 150px;
            height: 45px;
            font-size: 16px;
            letter-spacing: 1px;
            background: lightseagreen;
            color:white;
            font-size: 20px;
            border: 2px solid lightseagreen;
            border-radius: 10px;
            margin-left: 630px;

        }
        .button button:hover{
            background: white;
            color: lightseagreen;
            border: white;
        }
        p{
            width: 1000px;
            height: 399px;
            border: 2px ;
            border-radius: 50px;
            text-align: center;
            box-shadow: box;
            margin-top: 35px;
            backdrop-filter: blur(30px);
            font-weight: 700;
            line-height: 1.5;
            color: lightskyblue;
            display: flex;
            padding: 3rem;
            align-items: center;
            font-size: 15px;
            margin-left: 450px;
        
            

        
            
        }
        img{
            
            width: 250px;
            height: 250px;
            margin-right: 50px;
            border: 2px;
            border-radius: 10px;
            transform: translateX(-5rem);
            object-fit: cover;
            position: relative;
            
        
                 
        }
        h2{
            margin-left: 900px;
            color: lightskyblue;
            font-weight: 2000;
            font-size: 20px;
        }
        .article p{
            padding-top: 30px;
        }
        


        
    </style>
</head>
<body>
    
<div class="menu">
            <nav>
                <ul>
                    <a href="home.php"><li>Home</li></a>
                    <a href="about.php"><li>About</li></a>
                    <a href="achievements.php"><li>achievements</li></a>
                    <a href="gallery.php"><li>gallery</li></a>
                    <a href="viewarticles.php"><li>articles</li></a>
                    <li><a href="contact.php"><button class="btn">contact  us</button></a></li>
                    <li><a href="admin.php"><button class="btn">settings</button></a></li>
                </ul>
            </nav>
        
        </div>
    <div class="container">
        <h1>articles</h1>
         
        <div class="article">
    
        <?php
        include 'connect.php';
        $sql="SELECT * FROM `articles`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            ?>

           
            <h2><?php echo $row['title']?></h2>

             <p>
             <img src="<?php echo $row['image']?>" alt="">
             <?php echo$row['contenttext']?>
             
             </p>
        <?php
        } 
    
    
        ?>

    </div>
    <div class="button">

    </div>
    
</body>
</html>