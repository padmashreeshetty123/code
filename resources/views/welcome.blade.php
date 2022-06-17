
<head>
    
    <style>
        body{
            margin:0px;
            
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
        .full-image{
            width:100%;
            height:600px;
            background:url("laptop.webp") center center;
            background-size:cover;
               }
        .second-part{
                   display:flex;
         }
         h3{
             color:yellow;
            margin:0px;
         }
         #details{
             word-spacing:2px;
             line-height:1.6;
             text-align:left;
             padding: 50px 140px 50px 90px;
         }
         #p1{
             color:white;
             font-style:italic;
             margin: 5px 0px 40px 0px;
             word-wrap: break-word;
         }
         h3 img{
             
             border-radius:30px;
             float:left;
             background-color:yellow;
             margin-right:10px;
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
            <a href="event1">EVENTS</a>
        </div>
        <div class="flex-item"><a href="register">REGISTER</a></div>
        <div class="flex-item"><a href="about">ABOUT</a></div>
        </div>
    </div>
    </nav>
    <div class="full-image">
        
    </div>
    <div class="second-part">
        <div id="details">
            <h1 style="color:yellow">WE ARE EVENT<br>ORAGANIZERS</h1>
          <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione qui ad dignissimos ea at amet hic vero, et excepturi iste! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores debitis iure perspiciatis numquam et nobis inventore adipisci officiis voluptate, aperiam nesciunt ipsa esse quibusdam minima illum culpa error consequuntur laboriosam! Lorem, ipsum dolor. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga omnis, aperiam libero excepturi voluptatibus optio cupiditate neque? Harum animi pariatur nulla placeat magnam nemo sapiente, qui dignissimos eveniet saepeid. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, repudiandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. A quo, maiores temporibus suscipit earum dicta voluptatem eum accusamus et totam laborum quos placeat illo. Voluptatibus laudantium explicabo natus debitis nemo.
          </p>
        </div>
        <div>
            <div style=" background: rgba(0,0,0,.8);">
            <div style="width:700px; height:500px; margin:30px; padding-top:10px;">
            
                  <marquee direction="up" height='500px ' >
                  @foreach($data as $key)
                  <h3><img src="1.svg" alt="" height=16px>{{$key->title}}</h3>
                  <p id="p1">{{$key->description}}</p>
                  @endforeach

        </marquee>
            </div>
        </div>
        </div>
    </div>
</body>