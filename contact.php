<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        body{
            background-image: url(wone55.jpeg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-size: 14px;
            font-family: 'poppins',sans-serif;
        }
        .container{
            width:80%;
            margin: 50px;
           
        }
        .contact-box{
            background: transparent;
            display: flex;
            backdrop-filter: blur(20px);
        }
        .contact-left{
            flex-basis: 60%;
            padding: 40px 60px;
        }
       .contact-right{
            flex-basis: 40%;
            padding: 40px;
            background: lightseagreen;
        }
        h1{
            margin-bottom: 10px;
            color: lightblue;
        }
        .container p{
            margin-bottom: 40px;
            color: white;
            font-size: 20px;
            font-weight: 600;
        }
        .input-row{
          display: flex;  
          justify-content: space-between;
          margin-bottom: 20px;
        }
        .input-row .input-group{
           flex-basis: 45%; 
           font-size: 20px;
        }
        input{
            width: 100%;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            padding-bottom: 50px;
        }
        textarea{
            width: 100px;
            border: 1px solid #ccc;
            outline: none;
            padding: 10px;
            box-sizing: border-box;
        }
        label{
            margin-bottom: 6px;
            display: block;
            color: lightseagreen;
            font-weight: 500;

        }
          .message button{
            background: lightseagreen;
            width: 100px;
            border: none;
            outline: none;
            color: white;
            height: 35px;
            border-radius: 30px;
            margin-top: 20px;
            box-shadow: 0px 5px 15px 0px rgba(28,0,181,0.3);
        }
        .contact-left h3{
            color: lightseagreen;
            font-weight: 600;
            margin-bottom: 50px;
            font-size: 20px;
        }
        .contact-right h3{
            font-weight: 600;
            margin-bottom: 30px;
            color: lightseagreen;
            font-size: 30px;
        }
        tr td:first-child{
            padding-right: 20px;
            color: white;
            font-size: 18px;
        }
        tr td{
            padding-top: 20px;
            color: black;
            font-size: 20px;
        }
        .input-group input{
            font-size: 20px;
        }
        label{
            font-size: 30px;
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
            font-weight: 700;
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
        input{
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

        }
        .input-group{
            position: relative;
            border-bottom: 5px solid black;
        }
        .icons{
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        i{
            font-size: 20px;
            padding: 10px;
            margin-left: ;
            color: black;
        }
        .container p{
            color: black;
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
                </ul>
            </nav>
        
        </div>
    <div class="container">
    <h1>Connect  with mwesigye</h1>
    <p>Reach out to Mwesigye any how ,any where, he is available on the listed socialmedia platforms and you can reach out to him any time.<br>
    He is known for his Proffessional model of communication,Mwesigye thomas is fluent in multiple languages including English and Kinyarwanda he can also speak Swahili and Fench.
</p>
    </div>
    <div class="contact-box">
       <div class="contact-left">
        <h3>send your message</h3>
        <form>
            <div class="input-row">
                <div class="input-group">
                  <label>Name</label>
                  <input type="text" placeholder="mwesigye thomas">  
                </div>
                <div class="input-group">
                    <label>mobile no</label>
                    <input type="text" placeholder="0786160338">  
                  </div>
            </div>
            <div class="input-row">
                <div class="input-group">
                  <label>email</label>
                  <input type="email" placeholder="mwesigyethomas@gmail.com">  
                </div>
                <div class="input-group">
                    <label>subject</label>
                    <input type="text" placeholder="offer">  
                  </div>
            </div>
            <div class="message">
            <label>Message</label>
            <textarea rows="5" placeholder="type your maessage"></textarea>
            <button type="submit">SEND</button>
        </div>
        </form>
       </div> 
       <div class="contact-right">
        <h3>Reach us</h3>
        <table>
            <tr>
                <td>Email</td>
                <td>mwesigyethomas@gmail.com</td>
            </tr>
            <tr>
                <td>phone</td>
                <td>0786160338</td>
            </tr>
            <tr>
                <td>Adress</td>
                <td>kk,215 st yima plaza,2nd floor,
                    on sonatube street </td>
            </tr>
            <tr>
                <td>socialmedia</td>
                <td>     
               <div class="icons">
               <a href="https://instagram.com/mwesigye_thomas" target="_blank"><i class="fa-brands fa-square-instagram"><p>mwesigye thomas</p></i></a>
               <a href="https://facebook.com/MWESIGYE thomas"><i class="fa-brands fa-square-facebook"><p>mwesigye thomas</p></i></a>
               <a href="https://linked-in.com/Thomas MWESIGYE"><i class="fa-brands fa-linkedin-in"><p>mwesigye thomas</p></i></a>
               <a href="https://x.com/MWESIGYE thomas"><i class="fa-brands fa-x-twitter"><p>mwesigye thomas</p></i></a>
               </div>
               </td>
               
            </tr>
        </table>
    </div>
    
</body>
</html>