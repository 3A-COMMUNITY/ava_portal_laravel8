<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AVA</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,500&display=swap" rel="stylesheet">

  <style>
    body{
      color:rgb(75, 75, 75);
      font-family: 'Montserrat', sans-serif;
    }
    .container{
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
    .img{
      width: 100%;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="img">
      <a href="https://files.fm/u/8v7yquufq"><img src="https://files.fm/u/8v7yquufq" alt="AVA" style="width: 200px;"></a>
    </div>
    <div style="padding: 10px;">
      <h1 style="color: #006bb7;">{{$data['name']}}</h1>
      <h2>{{$data['email']}}</h2>
      <h3  style="color: #006bb7;">{{$data['subject']}}</h3>
      <p>{{$data['message']}}</p>
      <p style="text-align: center; margin-top: 40px;">&copy; Copyright <strong><span>AVA</span> - {{date('Y')}}</strong>. Todos os direitos reservados.</p>
    </div>
  </div>
</body>
</html>