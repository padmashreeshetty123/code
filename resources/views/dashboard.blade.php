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
    
form{
  float:right;
}
table{
  width:113%;
  test-align:center;
  margin-top:80px;
  overflow:auto;
  border-collapse:collapse;
  
}
tr:nth-child(odd) {
  background-color: #f2f2f2;
}
tr:nth-child(even){
  background-color:rgb(191, 191, 191);
}
th,table,tr{
  border:1px solid black;
  
}
th,tr{
  vertical-align:middle;
}
.count{
  width:20%;
  margin-left:40%;
  
  padding:0px;
  
  text-align:center;
  border-radius:50%;
  
  line-height:250px;
  font-size:80px;
  outset:10px;
  
  border-right:10px solid rgb(52, 235, 192);
  border-bottom:10px solid rgb(220, 235, 52);
  font-weight:800;
}
tr{
  font-size:18px;
}

    </style>
</head>
<body>
<div class="sidebar">
  <a href="dashboard">Event list</a>
  <a href="news">update news</a>

</div>
<div style="margin-left:170px">
<h1 style="text-align:center">REGISTERED</h1>
  <div class="count">
   {{$rowcount}}
  </div>
  <div style="overflow-x:scroll">
  <table cellpadding=10px>
    <thead>
      <tr style="background-color:rgb(99, 99, 99)">
        <th><strong>No.</strong></th>
        <th><strong>NAME</strong></th>
        <th><strong>CONTACT</strong></th>
        <th><strong>DESCRIPTION</strong></th>
        <th><strong>EVENT</strong></th>
      </tr>
    </thead>
    <tbody>
    
    
      
      @foreach($data as $key)
      <tr>
        <th>{{$count++}}</th>
        <th>{{$key->name}}</th>
        
        <th>{{$key->contact}}</th>
        <th>{{$key->description}}</th>
        <th>
          {{$key->event_name}}
        <form action="delete" method="post">
          @csrf
            <input type="hidden" name="name" value='{{$key->name}}'>
            <button type="submit" style="background-color:red; border-radius:10px; color:white;  padding:10px 30px 10px 30px;">delete</button>
          </form>
        </th>
      </tr>
      @endforeach
      
    
    </tbody>
  </table>
  </div>
</body>
</html>