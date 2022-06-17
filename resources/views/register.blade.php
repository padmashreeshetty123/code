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
            background:url("white_bg.webp") center center;
            background-repeat:no-repeat;
            background-size:cover;
            text-align:center;
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
        .register{
          text-align:center;
          width: 30%;
          margin:auto;
          background-color:white;
        }
        input{
            width:300px;
            height:30px;
            margin:30px 0px;
            
            border:transparent;
            background:transparent;
            border-bottom:2px solid grey;
            outline:none;
        }
       
         
        form{
            padding:30px;
            text-align:left;
        }
        button{
            margin-left:90px;
            padding:15px 30px;
            background:black;
            color:white;
            border:2px solid grey;
        }
        .first_div{
            width:50%;
            background:url("cp1.jpg") center center;
            background-size:cover;
}
        .details{
         padding:10px;
            display:flex;
            width:66%;
            height:99vh;
            margin:1vh auto;
            text-align:center;
            border:1px solid white;
      background-color:white;
        }
        h1:hover{
      background-color:white;
    }
    </style>
</head>
<body>

<nav>
    <div class="nav">
        <img src="images.png" alt="" style="width:150px; height:60px; position:absolute; top:7px; left:12px;">
        <div CLASS="navbar">
        <div class="flex-item">
            <a href="/">HOME</a>
        </div>
        <div class="flex-item">
            <a href="event1">EVENTS</a>
        </div>
        <div class="flex-item"><a href="register">REGISTER</a></div>
        <div class="flex-item"><a href="about">ABOUT</a></div>
        </div>
    </div>
    </nav>
<h1>REGISTER YOURSELF HERE</h1>
<div class="details">
    <div class="first_div">
        
    </div>
<div class="register">   
    <form action="database" method="post">
        @csrf
        <label for="">NAME:</label> <br>
        <input type="text" name="name" id="i1"><br>
        <label for="">EVENT:</label><br>
        <input type="text" name="event"><br>
        <label for="">CONTACT:</label>
         <br><input type="number" name="contact" id=""><br>
         <label for="">DESCRIPTION:</label><br>
         <input type="textarea" name="description" id="description"><br>
         <button type="submit">SUBMIT</button>
   
    </form>
    </div>
    </div>
</body>
</html>