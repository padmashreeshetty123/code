<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
              .sidebar {
  height: 100%;
  width: 160px;
  position:fixed;
  z-index: 1; 
  top: 0; 
  left: 0;
  background-color: #111; 
  overflow-x: hidden; 
  padding-top: 50px;
}
.sidebar a{

  padding: 6px 8px 20px 16px;
  text-decoration: none;
  font-size: 25px;
  margin:30px 6px 0px 4px;
  color: #818181;
  display: block;
  border-bottom: 1px solid white;
}
.form{
    width:60%;
    margin:10% 20%;
    padding:40px;
    text-align:left;
    border:3px solid black;
    border-radius:30px;
    font-size:24px;
}
input{
  border-radius:10px;
  border:1px solid grey;
  height:30px;
  margin:10px;
}
input[type="textarea"]{
  border-radius:10px;
  height:60px;
  width:350px
}
button{
  padding:10px 20px;
  background-color:green;
  color:white;
  border-radius:10px;
  margin:10px 20px;
}
   
    </style>
</head>
<body>
  <div style="position:relative">
<div class="sidebar">
  <a href="dashboard">Event list</a>
  <a href="news">update news</a>

</div>
</div>
<div class="form">
<form action="database2" method="post" enctype="multipart/form-data">
        @csrf
        TITLE:
        <input type="text" name="title">
        DESCRIPTION: 
        <input type="textarea" id="description" name="description"></input><br>
        CHOOSE A PICTURE:
        <input type="file" name="file" id="file"><br>
         <button type="submit">SUBMIT</button>
         <button type="reset">RESET</button>
    </form>
</div>
</body>
</html>