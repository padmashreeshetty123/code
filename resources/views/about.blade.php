<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            margin:0px;
            background:url("");
        }
        nav{
            background:#eeeded;
            position:sticky;
            top:0px;
            
        }
        .navbar{
            letter-spacing:1px;
            display:flex;
            justify-content:end;
            align-items:center;
            margin-right:50px;
            
        }
        .flex-item{
            font-size:20px;
            font-weight:300;
            margin:6px;
            padding:20px;
        }
        .flex-item a{
            font-family:sans-serif;
            text-decoration:none;
            color:black;
        }
        .flex-item:hover{
            background:yellow;
        }
        .flex2{
            display:flex;
            align-items:center;
        }
        .flex2 a{
            display:block;
            font-size:65px;
            margin:100px 100px;
            text-decoration:none;

        }
        .first img{
            width:70px;
            height:70px;
            border-radius:50%;
            margin-right:25px;
        }
    </style>
</head>
<body>
<nav>
    <div class="nav">
        <img src="images.png" alt="" style="width:150px; height:60px; position:absolute; top:7px; margin-left:10px;">
        <div CLASS="navbar">
        <div class="flex-item">
            <a href="/">HOME</a>
        </div>
        <div class="flex-item">
            <a href="event">EVENTS</a>
        </div>
        <div class="flex-item"><a href="register">REGISTER</a></div>
        <div class="flex-item"><a href="about">ABOUT</a></div>
        </div>
    </div>
    </nav>
    <div class="flex2">
        <div> 
           <img src="avt1.jpeg" alt="" style="border-radius:50%; margin:50px 0px 0px 50px;" width=500px height=500px>
        </div>
        <div class="first">
           <a href="" style="color:blue"> <img src="linkedin.png" alt="">LinkedIn</a><a href="" style="color:blue"><img src="fb1.jpg" alt="">Facebook</a><a href="" style="color:pink"><img src="insta.webp" alt="">Instagram</a>
        </div>
    </div>
</body>
</html>