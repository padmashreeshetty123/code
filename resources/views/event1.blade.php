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
    <!--actual event1 used in the code-->
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
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
      html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0;
    background: transparent;  
}
::-webkit-scrollbar-thumb {
    background: transparent;
}

    body{
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
    background-color:white;
    box-shadow:2px ;
    min-width: 300px;
    height:25vw;
    
}

.event_list{
    display:flex;
    width:80%;
    margin :auto;
    overflow-x:scroll;
}
.event_list_item img{
    width:100%;
    height:40%;
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
        <div class="main">
    <div class="event_list_item">
        <img src="storage/images/{{$key->path}}" alt="">
        <h1>{{$key->title}} </h1>
        <p>{{$key->description}}</p>
    </div>
   @endforeach
</div>
    </div>
</body>
</html>

 -->
 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 
    <style>
*{
    margin:0;
    padding:0;

}
body{
    background:#0a2a43;
    min-height:1500px;

}
section:before{
    content:'';
    position:absolute;
    bottom: 0;
    width:100%;
    height:10px;
    background:linear-gradient(to top,#0a2a43,transparent);
    z-index:10000;
}
section:after{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:#0a2a43;
    z-index:10000;
    mix-blend-mode:color;
}
section{
    position:relative;
    width:100%;
    height:100vh;
    overflow:hidden;
    display:flex;
    justify-content:center;
    align-items:center;
}
section img{
position:absolute;
top: 0;
left:0;
width:100%;
height:100%;
object-fit:cover:
pointer-events:none;
}
#text{
    position:relative;
    color:#fff;
    font-size:10em;
    z-index:1;
 
}
#road{
    z-index:2;
}
#text2{
  text-align:left;
  color:white;
  padding:50px 200px;

  transition:all 1s linear;
  
}
#text2:hover{
   
}





        nav{

        position:absolute;
        top:0px;
        right:0px;
        z-index:10001;
    
        
            
        
        }
        
        .navbar{
            letter-spacing:1px;
            display:flex;
            justify-content:end;
            align-items:center;
            margin-right:50px;
            
        }
        .flex-item{
            font-size:14px;
            font-weight:300;
            margin:6px;
            padding:15px 40px;
            border-radius:50px;
            border:1px solid white;
            margin-left:30px;
    
        }
        .flex-item a{
            font-family:sans-serif;
            text-decoration:none;
            color:white;
          
        }
      
    </style>
</head>
<body>
<nav>
    <div class="nav">
        
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
    <section>
        <img src="bg.jpg" alt="" id="bg">
        <img src="moon.png" alt="" id="moon">
        <img src="mountain.png" alt="" id="mountain">
        <img src="road.png" alt="" id="road">
        <h1 id="text">EVENTS</h1>
    </section>
    <!-- <h1 id="text2" data-aos="fade-up" data-aos-duration="2000" >EVENT LIST</h1> -->
<!-- 
    <div class="event_list" data-aos="fade-up" data-aos-duration="2500">
        @foreach($data as $key)
        <div class="main">
    <div class="event_list_item">
        <img src="storage/images/{{$key->path}}" alt="">
        <h1>{{$key->title}} </h1>
        <p>{{$key->description}}</p>
    </div>
   @endforeach
</div>
    </div> -->
    <script>
        let bg=document.getElementById("bg");
        let moon=document.getElementById("moon");
        let road=document.getElementById("road");
        let mountain=document.getElementById("mountain");
        let text=document.getElementById("text");
        window.addEventListener('scroll',function(){
            var value=window.scrollY;
            console.log(value);
            mountain.style.top=value*0.15+'px';
            bg.style.top=-value*0.5+'px';
            moon.style.left=-value*0.5+'px';
            road.style.top=value*0.15+'px';
            text.style.top=value*1+'px';
        });
    </script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
  AOS.init();
</script>
</body>
</html> -->
