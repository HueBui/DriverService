<!DOCTYPE html>
<html>
<head>
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .nen{
      background-color: blue;
      color:white;
      min-height: 150px;
    }
    .giua{
      min-height: 500px;
      
      
    }
    .menu{
      background-color: black;
      color:white;
      height: 50px;
      padding-top: 8px;
      }
  .menu ul li{
      list-style-type: none;
      display: inline-block;
      min-width:150px;
      
      height: 50px;
    } 
  .menu ul li a{
      
      text-decoration: none;
      color:white;
      font-weight: bold;
      height: 50px;
      display: block;
      }
  .menu ul li a:hover{
      background-color: red;
      color:yellow;
      font-weight: bold;
      text-decoration: none;
      height: 50px;


    }
  </style>
</head>
<body>
<?php
  session_start();//khoi dong phien lam viec
?>
<div class="container-fluid">
  <div class="row nen">
    <div class="col-sm-12">
      <h1>Đây là banner</h1>
    </div>
  </div>
  <div class="row menu">
    <ul>
      <li><a href="?controller=page&action=home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="?controller=page&action=about">About us</a></li>
      <li><a href="?controller=page&action=contact">Contact us</a></li>
      <li><a href="?controller=page&action=policy">Policies</a></li>
<li><form class="form-inline" action="?controller=prod&action=search">
      <div class="form-group">
    
    <input type="text" class="form-control" name="name" placeholder="Nhập nội dung cần tìm" required="true">

  </div>
  <button type="submit" class="btn btn-success">Search</button>
    </form></li>
    </ul>

  </div>
</div>
</body>
</html>