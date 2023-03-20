<html>

  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="assets/icon.png">
    <script src="js/app.js" defer></script>
</head>
<body>

<!--header-->
    <nav class="navbar">
      <img class="logo" src="assets/main-Logo.png" alt="mdo">

      <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>

      <div class="navlinks">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/games">Games</a></li>
          <li><a href="/about">About</a></li>
        </ul>
      </div>
        
    </nav>
<!--END of header-->

  

<!--content-->
<section>

    @yield('content')

</section>
<!--END of content-->


    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
</body>
        
</html>