<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,400;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            margin:0;
            padding:0;
            font-family:Montserrat, sans-serif;    
            background-color:#9e9e9e30;
        }
        nav{
            background:#eeeded;
            position:sticky;
            top:0px;
            z-index:1;
            background:black;
        }
        .navbar{
            letter-spacing:1px;
            display:flex;
            justify-content:end;
            align-items:center;
            margin-right:50px;
           
        }
        .flex-item{
            font-size:17px;
            font-weight:300;
            margin:0px 8px;
            padding:15px;
            letter-spacing:3px;
        }
        .flex-item a{
            font-family:sans-serif;
            text-decoration:none;
            color:white;
        }
        .flex-item:hover .d{
               color:gray;
                }
        section{
            position: relative;
    width: 100%;
    height: 100vh;
    background: url(building.jpg) top center;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f3e5f5;
    font-size: 60px;
    font-family: 'Playfair Display', serif;
    text-shadow: 3px 5px 13px black;
}

.main{
    display: flex;
    
    text-align:left;
    margin: auto;
  

    
    height:55%;
    justify-content: center;
}
.event_list_item {
    margin: 30px;
    padding:20px;
    background-color: #f2f2f2;
    box-shadow:2px ;
    min-width: 300px;
    height:25vw;
    border:0.5px solid grey;
    border-radius:10px;
    box-shadow:5px 5px 10px grey;
    transition: all .3s ease-out;
  
}

.event_list{
    display:flex;
    width:79%;
    margin :auto;
    overflow-x:scroll;
}
.event_list_item img{
    width:100%;
    height:40%;
    border-radius:40px;
}
::-webkit-scrollbar {
    width: 0; 
    background: transparent;  
}

::-webkit-scrollbar-thumb {
    background: transparent;
}
footer{
    color:white;
    padding:5px;
    display:flex;
    justify-content:center;
    align-items:center;
    background-color:black;
}
    </style>
</head>
<body>
    
    <nav>
    <div class="nav">
        <img src="logo2.png" alt="" style="width:55px; height:40px; position:absolute; top:7px; left:12px; border-radius:150px;">
        <div CLASS="navbar">
        <div class="flex-item">
            <a class="d"href="/">HOME</a>
        </div>
        <div class="flex-item">
            <a class="d" href="event1">EVENTS</a>
        </div>
        <div class="flex-item"><a class="d" href="register">REGISTER</a></div>
        <div class="flex-item"><a class="d" href="about">ABOUT</a></div>
        </div>
    </div>
    </nav>
    <section id="bg">
        <h1 style="  font-family: 'Playfair Display', serif;, sans-serif;" data-aos="fade-right" data-aos-delay="200" data-aos-duration="2000" >EVENT LIST</h1>
    </section>
    
    <div class="event_list">
        @foreach($data as $key)
        <div class="main">
    <div class="event_list_item"  data-aos="zoom-in" data-aos-delay="" data-aos-duration="1200" >
        <img src="storage/images/{{$key->path}}" alt="">
        <h1>{{$key->title}} </h1>
        <p>{{$key->description}}</p>
    </div>
</div>
   @endforeach
    </div>
<footer>
<p>&copy; Copyright</p>
</footer>
    <script>
          window.addEventListener('scroll',function(){
            var value=window.pageYOffset;
            let bg=document.getElementById('bg');
            
            bg.style.backgroundPositionY=value*1+'px';
        });
    </script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
  AOS.init();
</script>
</body>
</html>