<!DOCTYPE html>
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



       .main{
    display: flex;
    
    text-align:left;
    margin: auto;
    

    
    height:55%;
    justify-content: center;
}
.event_list_item {
    text-align:center;
    color:white;
    margin: 30px;
    padding:20px;
    background-color:white;
    box-shadow:2px ;
    min-width: 300px;
    height:25vw;
    border-radius:50px;
    border:0.7px solid white;
    background-color:transparent;
    backdrop-filter:blur(8px);
}
.event_list_item h1{
    margin-top:20px;
}
.event_list_item p{
    margin-top:30px;
}
::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: transparent;
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
    border-radius:40px;

}

::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: transparent;
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
    <h1 id="text2" data-aos="fade-up" data-aos-duration="2000" >EVENT LIST</h1>

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
    </div>
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
</html>