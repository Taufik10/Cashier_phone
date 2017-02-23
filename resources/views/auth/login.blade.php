<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Log'n Load</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="/login-flat/css/style.css">

  
</head>

<body>
  <div class="login"> 
   @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach 
  <header class="header">
    <span class="text">LOGIN</span>
    <span class="loader"></span>
  </header>
  <form class="form" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">  
    <input class="input" type="text", placeholder="Name" name="name">
    <input class="input" type="password" placeholder="Password" name="password">
    <button class="btn" type="submit"></button>
  </form>
</div>
<button class ="resetbtn" type= "reset">Reset it
</button>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="/login-flat/js/index.js"></script>

</body>
</html>
