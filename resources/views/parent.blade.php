<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel 5.8 Crud Tutorial</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>       
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/perfect-scrollbar.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-rtl.min.css')}}">
        </head>
	<body>
		<div class="container">    
  			<br />
  			<h3 align="center">Dashboard</h3>
              <br />
              
                                  @yield('main')
                            
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/audio.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/select2.min.js') }}"></script>  
        <script type="text/javascript">
                $('.js-pscroll').each(function(){
                    var ps = new PerfectScrollbar(this);
        
                    $(window).on('resize', function(){
                        ps.update();
                    })
                });
                
                
                
            </script>
	</body>
</html>