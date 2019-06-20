<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('/css/main.css')}}" />
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.min')}}" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
    </head>
    <body>
        
        <div class="">
         @yield("cabecera")   
           <!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="/courier/public/index.php" class="logo">Fast Courier</a>
				<nav class="right">
					<a href="#" class="button alt">Ingresar</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="/courier/public/index.php">Home</a></li>
					<li><a href="{{route('clientes.index')}} ">Clientes</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Entrar</a></li>
				</ul>
			</nav>
        
        <div class="container">
         @yield("contenido") 
        </div>
        
        <div class="">
        @yield("pie")  
         
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Contactanos</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(+56 2) 2378-0705</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">ingenieria@ingcal.cl</a></li>
						<li><span class="icon fa-map-marker"></span> Carlos Antunez 2330, Providencia, Santiago</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Ing Cal Soluciones. Derechos <a href="">RESERVADOS</a>. Imagenes <a href="">PROPIETARIAS.</a>
				</div>
			</footer>
        </div>
                <script src="{{ asset('/js/jquery.min.js')}}"></script>
                <script src="{{ asset('/js/jquery.scrolly.min.js')}}"></script> 
                <script src="{{ asset('/js/skel.min.js')}}"></script> 
                <script src="{{ asset('/js/util.js')}}"></script>
                <script src="{{ asset('/js/main.js')}}"></script>                 			
    </body>
</html>

