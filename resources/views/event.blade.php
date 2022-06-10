<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> body{
            margin:0px;
            background:url("white_bg.webp");
            TEXT-ALIGN:CENTER;
        }
        nav{
            background:#eeeded;
            position:sticky;
            top:0px;
            z-index:1;
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
       .event_list {
    display: flex;
    flex-wrap: nowrap;
    text-align:left;
    margin: auto;
    
    position: relative;
    
    justify-content: center;
}
.event_list_item {
    margin: 30px;
    padding:20px;
    background-color:white;
    box-shadow:2px ;
    width: 30vw;
}
.event_list_item img{
    width:100%;
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
            <a href="event">EVENTS</a>
        </div>
        <div class="flex-item"><a href="register">REGISTER</a></div>
        <div class="flex-item"><a href="about">ABOUT</a></div>
        </div>
    </div>
    </nav>
    <h1>EVENTS LIST</h1>
    <div class="event_list">
    @foreach($data as $key)
    <div class="event_list_item">
        <img src="storage/images/{{$key->path}}" alt="">
       
        <h1>{{$key->title}}</h1>
        <p>{{$key->description}}</p>
    </div>
    @endforeach
    
   
    
    
    
   
    </div>
</body>
</html>