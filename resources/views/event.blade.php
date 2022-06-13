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
            height: 600px;
  margin: 0;
  display: grid;
  grid-template-rows: 500px 100px;
  grid-template-columns: 1fr 30px 30px 30px 30px 30px 1fr;
  align-items: center;
  justify-items: center;
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
main#carousel {
  grid-row: 1 / 2;
  grid-column: 1 / 8;
  width: 100vw;
  height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  transform-style: preserve-3d;
  perspective: 600px;
  --items: 5;
  --middle: 3;
  --position: 1;
  pointer-events: none;
}

div.item {
  position: absolute;
  width: 300px;
  height: 400px;
  background-color: coral;
  --r: calc(var(--position) - var(--offset));
  --abs: max(calc(var(--r) * -1), var(--r));
  transition: all 0.25s linear;
  transform: rotateY(calc(-10deg * var(--r)))
    translateX(calc(-300px * var(--r)));
  z-index: calc((var(--position) - var(--abs)));
}

div.item:nth-of-type(1) {
  --offset: 1;
  background-color: #90f1ef;
}
div.item:nth-of-type(2) {
  --offset: 2;
  background-color: #ff70a6;
}
div.item:nth-of-type(3) {
  --offset: 3;
  background-color: #ff9770;
}
div.item:nth-of-type(4) {
  --offset: 4;
  background-color: #ffd670;
}
div.item:nth-of-type(5) {
  --offset: 5;
  background-color: #e9ff70;
}

input:nth-of-type(1) {
  grid-column: 2 / 3;
  grid-row: 2 / 3;
}
input:nth-of-type(1):checked ~ main#carousel {
  --position: 1;
}

input:nth-of-type(2) {
  grid-column: 3 / 4;
  grid-row: 2 / 3;
}
input:nth-of-type(2):checked ~ main#carousel {
  --position: 2;
}

input:nth-of-type(3) {
  grid-column: 4 /5;
  grid-row: 2 / 3;
}
input:nth-of-type(3):checked ~ main#carousel {
  --position: 3;
}

input:nth-of-type(4) {
  grid-column: 5 / 6;
  grid-row: 2 / 3;
}
input:nth-of-type(4):checked ~ main#carousel {
  --position: 4;
}

input:nth-of-type(5) {
  grid-column: 6 / 7;
  grid-row: 2 / 3;
}
input:nth-of-type(5):checked ~ main#carousel {
  --position: 5;
}
.item img{
    width:100%;
    height:50%;
}

        </style>
</head>
<body>

<nav>
    <!-- <div class="input">
    <input type="radio" name="a" id="a" checked><input type="radio" name="a" id="b">
</div> -->
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
    <!-- <label  class="a1" for="a"><</label>
    <h1>EVENTS LIST</h1>
    <div class="event_list">
    @foreach($data as $key)
    <div class="event_list_item">
        <img src="storage/images/{{$key->path}}" alt="">
       
        <h1>{{$key->title}}</h1>
        <p>{{$key->description}}</p>
    </div>
    @endforeach -->
    
   
    
    
    
   
    </div>
    <label class="b1" for="b">></label>
    
  <input type="radio" name="position" />
  <input type="radio" name="position" />
  <input type="radio" name="position" checked />
  <input type="radio" name="position" />
  <input type="radio" name="position" />
  <main id="carousel">
  @foreach($data as $key)
    <div class="item">
        <img src="storage/images/{{$key->path}}" alt="">
       
        <h1>{{$key->title}}</h1>
        <p>{{$key->description}}</p>
    </div>
    @endforeach
    <main>
</body>
</html>
<!-- a.a,a.b
{
    text-decoration:none;
    display:inline-block;
    padding:10px;
    background-color:lightblue;
    font-size:40px;
    border-radius:50%;
} -->