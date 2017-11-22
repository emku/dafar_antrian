
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="Mohammad Kukuh">
  <title>Sistem Antrian</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" >
  <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-grid.css') }}" >
  <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-reboot.css') }}" >
  <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  
  @yield('header')
</head>
<body>
	<div class="jumbotron" style="background: white;">
    
   <h2 class="title" align="center" >Antri gan!</h2>
        
  </div>
	@yield('content')
</body>

	@yield('footer')
  <footer id="footer">

    <div class="bottom text-mute">
      <span > footer ajaib pembawa berkah </span>
    </div>
    <script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.js') }}" ></script>
  

  </footer>

</html>