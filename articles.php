<?php
include 'session.php';
include 'connect.php';
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $content=$_POST['contenttext'];
    
    $image=$_FILES['image']['name'];
    $ext=pathinfo($image,PATHINFO_EXTENSION);
    $allowedtypes= array("jpg","jpeg","gif");
    $tempname=$_FILES['image']['tmp_name'];
    $targetpath="uploads/".$image;
    if(in_array($ext,$allowedtypes)){
        if(move_uploaded_file($tempname,$targetpath)){
            $query="INSERT INTO `articles`(`title`,`contenttext`,`image`) VALUES ('$title','$content','$image')";
            if(mysqli_query($conn,$query)){
                header("location:viewarticles.php");
            }
        }
    }


}

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
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        body{
            background:url(amos2.jpg);
            font-size: 14px;
            font-family:  Georgia, 'Times New Roman', Times, serif;
            
        }
        .container{
            width:80%;
            margin: 50px;
           
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
        label{
            display:block;
            margin-top: 15px;
            font-weight: bold;
            color: lightskyblue;
            font-size: 20px;
        }
        textarea{
            width: 70%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid white;
            border-radius: 4px;
            font-size: 16px;
            color: lightseagreen;
            background: black;
        }
        button{
            width:70%;
            padding: 12px;
            background-color: lightseagreen;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 15px;
        }
        button:hover{
            background: white;
            color:lightseagreen;
        }
        @media(max-width: 600px;){
            .container{
                padding: 15px;
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
        .button{
            padding-top: 40px;
            width: 170px;
            color: white;
        }
        button a{
            color: white;
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
                    <a href="articles.php"><li>articles</li></a>
                    <a href="viewarticles.php"><li>viewarticles</li></a>
                    <li><a href="contact.php"><button class="btn">contact  us</button></a></li>
                </ul>
            </nav>
        
        </div>
    <div class="container">
        <h1>write a new article</h1>
        <form  method="POST" enctype="multipart/form-data">
            <label for="tittle">article title:</label>
            <input type="text" id="title" name="title" required placeholder="Enter article title">
            <label for="content">article content:</label>
            <textarea placeholder="write your own text" name="contenttext"></textarea>
            <label for="image">upload image</label>
            <input type="file" name="image" id="image" accept="uploads/*" required><br>
            <button type="submit" name="submit">submit </button>
            <button><a href="admin.php">panel</a></button>
        </form>
    </div>
    
</body>
</html>

    
