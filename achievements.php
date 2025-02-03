<?php

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>achievements</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        body{
            width: 100%;
            background-image: url(wone55.jpeg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        title h1{
            text-align: center;
            padding-top:50px;
            font-size: 42px;

        }
        h1{
            margin-left: 820px;
            color: lightseagreen;
        }
        title h1:after{

            height: 4px;
            width: 230px;
            background-color: lightblue;
            display: block;
            margin: auto;
        } 
        .primary{
            width: 85%;
            display:contents;
            justify-content: space-between;
            align-items: center;
            
            text-align: center;
           
        }
        .card{
            width: 75%;
            display: ;
            justify-content: space-between;
            align-items: center;
            flex-direction: ;
            margin: 0px 20px;
            padding: 20px 20px;
            background: transparent;
            border-radius: 10px;
            cursor: pointer;
            backdrop-filter: blur(30px);
            margin-top:100px;
            margin-left: 260px;
            border: 2px solid lightseagreen;
            

        }
        .card h2{
            font-size: 28px;
            color: black;
            margin-bottom: 20px;
            color: lightseagreen;
        }
        .card p{
            font-size: 20px;
            margin-bottom: 30px;
            line-height: 1.5;
            color: lightblue;
            font-weight: 1000;
        }
        @media screen and (max-width:940px){
            .primary{
                display: flex;
                flex-direction: column;

            }
            .card{
                width: 85%;
                display: flex;
            }
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
            font-weight: 600;
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
        .section{
            display: block;
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
                    <li><a href="contact.php"><button class="btn">contact   us</button></a></li>
                </ul>
            </nav>
        
        </div>

    <div class="section">
        <div class="title">
            <h1>achievements</h1>
        </div>
        <div class="primary">
            <div class="card">
                <h2>PROFESSIONAL work epxperience</h2>
                <p>Mwesigye thomas is currently working as project manager at FICCARS program where his responsibilities are to lead financial inclusion in the energy initiatives under the FICCARS program and managing the team in project planning and stakeholder engagement as well as monitoring impactfull outcomes.</p>
            </div><br>
            <div class="card">
                <h2>Leadership experienc</h2>
                <p>Mwesigye thomas is a proud Executive commissioner at Rwanda National Youth Council ,his role is to provide strategic Leadership for Youth initiatives particulary those in higher learning institutions and advocating for youth empowerment and policy development ,focusing on the education and employment sector.</p>
            </div><br>

            <div class="card">
                <h2>Proffessional certifications and training</h2>
                <p>Mwesigye thomas is certified by standardized institutions for example in 2024 he was certified by Project Management Institute  in Project management for Proffessionals courses,he is also certified in Monitoring ,Evaluation ,Accountability, and Learning for Development Proffessionals by Humentum institution</p>
            </div><br>

            <div class="card">
                <h2>Education background</h2>
                <p>Mwesigye thomas holds a Masters degree in Science in project management and planning,he also holds a Bachelor's degree in Business Digital Communications . Both degrees were obtained at Mount Kigali University.</p>
            </div>
            
        </div>
    </div>
    
</body>
</html>