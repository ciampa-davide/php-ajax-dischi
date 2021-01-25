<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/app.css">
  <title>Document</title>
</head>
<div id="app">
  <body>
    <div class="container">
      <div class="box" v-for= "disk in disks">

        <img :src="disk.poster" alt="">
        <h4>{{disk.title}}</h4>
        <p>{{disk.author}}</p>
        <p>{{disk.year}}</p>

      </div>
    </div>
  </body>
</div>
<script src="dist/app.js" charset="utf-8"></script>
</html>
