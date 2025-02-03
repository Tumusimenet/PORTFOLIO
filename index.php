<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $contact=$_POST['contact'];
    $sql="SELECT * FROM `admin` WHERE `username`='$name' AND `password`='$pass' AND `contact`=$contact";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_assoc($query)){
        session_start();
        $_SESSION['login']=$row['username'];
        if($name==$row['username'] && $pass=$row['password']){
            header("location:admin.php");

        }
    }
      
    }
}else{
    echo'<error>';
}




?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        *{
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        body{
            background: url(amos2.jpg);
            background
           
        }
        form{
            border: 2px solid black;
            height: 500px;
            padding-left: 20px;
            width: 450px;
            padding-top: 50px;
            margin-top: 200px;
            margin-left: 630px;
            border-radius: 10px;
            backdrop-filter: blur(20px);
            box-shadow: 10px 10px 10px ;
          
        
        }
        form input{
            background: transparent;
            backdrop-filter: url(20px);
            font-weight: 600;
            color: black;
            font-size: 20px;
            position: relative;
            width: 98%;
            height: 50px;
            border: none;
            outline: none;
            color: lightseagreen;
            

            
        

        }
        .login input{
            position: relative;
            border-bottom: 2px solid black;
           
        }
        input::placeholder{
            color: lightskyblue;
        }
        button{
            background: darkcyan;
            color: white;
            width: 100px;
            height: 40px;
            border: 1px solid darkcyan;
            border-radius: 5px;
            margin-left: 160px;
            font-size: large;
        
        
        }
        button:hover{
            color: skyblue;
            background: white;
            font-weight: 600;
        }
        body{
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            background-size: ;
            
        }
        h2{
            margin-left: 150px;
            color: lightseagreen;
        }
        a{
            margin-left: 10px;
            color: lightseagreen;
        }
        p{
            font-weight: 600;
            margin-left: 20px;
            color: lightsteelblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <form   method="POST" action="index.php">
            <h2>login</h2>
            <div class="login">
            <input type="text" placeholder="username" name="username"><br>
            </div>
            <br>
            <p></p>
            <div class="login">
            <input type="password" placeholder="password" name="password"><br>
            </div>
            <br>
            <p></p>
            <div class="login">
            <input type="text" placeholder="contact" name="contact"><br>
            </div>
            <p></p>
            <p></p><br>
            <button type="submit" name="submit">submit</button>
            <p>if you dont have an account,<a href="register.php">Register</a></p>
        </form>
    </div>
    
</body>
</html>