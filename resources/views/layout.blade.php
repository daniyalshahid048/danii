<html>
    <head>
        <title>SE - @yield('title')</title>
          <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        @section('navbar')
           <nav class="navbar navbar-expand-md" >

  <a href="#" class="navbar-brand text-white pr-8"style="margin-left:20px">NiLON</a>
    <button type="button" class="navbar-toggler  " style="border-color: black " data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
       
     <ul class="navbar-nav ml-auto">
      <li class="nav-item">
                    <a id="index" class="navbar-brand" href="#">FA17 Bse 048/a>
                </li>
     <li class="nav-item">
                    <a id="index" class="navbar-brand" href="{{url('/welcome')}}">welcome</a>
                </li>
                <li class="nav-item">
                 <a id="index" class="navbar-brand" href="{{url('/registration')}}">Registration </a>                  
                </li>
                <li class="nav-item">
                  <a id="index" class="navbar-brand" href="{{url('/about')}}">About </a>                    
                </li>
     
     
</ul>
</div>
</nav>
 

        @show

        
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
            
            
            






