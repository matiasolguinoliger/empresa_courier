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
					<li><a href="{{route('clientes.index')}}">Clientes</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Entrar</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>Fast Courier</h1>
					<p>Somos especialistas en despachos , <br />Encomiendas , Entregas y Servicio</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">Empecemos</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Encomiendas</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent sapien, cursus netus aliquet dis rutrum ultricies habitasse varius leo, montes sociis taciti augue hendrerit dignissim euismod mi. Sapien semper egestas velit primis vehicula magna montes mauris mus, nunc magnis fames hendrerit cum feugiat curae potenti neque laoreet, est rhoncus elementum ultrices vel maecenas et sem. Ad netus vulputate libero himenaeos diam lobortis cursus fringilla at, ridiculus quis cubilia praesent eros nunc aenean tellus penatibus, platea magna porta interdum nam pharetra hac blandit.</p>
						</div>
						<div>
							<h3>Despachos</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent sapien, cursus netus aliquet dis rutrum ultricies habitasse varius leo, montes sociis taciti augue hendrerit dignissim euismod mi. Sapien semper egestas velit primis vehicula magna montes mauris mus, nunc magnis fames hendrerit cum feugiat curae potenti neque laoreet, est rhoncus elementum ultrices vel maecenas et sem. Ad netus vulputate libero himenaeos diam lobortis cursus fringilla at, ridiculus quis cubilia praesent eros nunc aenean tellus penatibus, platea magna porta interdum nam pharetra hac blandit.</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>Entregas</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent sapien, cursus netus aliquet dis rutrum ultricies habitasse varius leo, montes sociis taciti augue hendrerit dignissim euismod mi. Sapien semper egestas velit primis vehicula magna montes mauris mus, nunc magnis fames hendrerit cum feugiat curae potenti neque laoreet, est rhoncus elementum ultrices vel maecenas et sem. Ad netus vulputate libero himenaeos diam lobortis cursus fringilla at, ridiculus quis cubilia praesent eros nunc aenean tellus penatibus, platea magna porta interdum nam pharetra hac blandit.</p>
						</div>
						<div>
							<h3>Servicios</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent sapien, cursus netus aliquet dis rutrum ultricies habitasse varius leo, montes sociis taciti augue hendrerit dignissim euismod mi. Sapien semper egestas velit primis vehicula magna montes mauris mus, nunc magnis fames hendrerit cum feugiat curae potenti neque laoreet, est rhoncus elementum ultrices vel maecenas et sem. Ad netus vulputate libero himenaeos diam lobortis cursus fringilla at, ridiculus quis cubilia praesent eros nunc aenean tellus penatibus, platea magna porta interdum nam pharetra hac blandit.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>Fast courier</h2>
					<figure>
					    <blockquote>
					        "Empresa Fundada el año 2019<br />  ,Con aspiraciones de maxima calidad de servicio."
					    </blockquote>
					    <footer>
					        <cite class="author">Matias Olguin</cite>
					        <cite class="company">Ingeniero Informatico, Disenador General.</cite>
					    </footer>
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pm.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Servicio</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit felis, libero velit diam accumsan magna inceptos quam, fames hendrerit senectus vivamus et mollis integer.</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/I7.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Soluciones</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit felis, libero velit diam accumsan magna inceptos quam, fames hendrerit senectus vivamus et mollis integer.</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/cpu.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Contacto</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit felis, libero velit diam accumsan magna inceptos quam, fames hendrerit senectus vivamus et mollis integer.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Contactanos</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(+56 2) 2378-0705</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">contacto@FastCourier.cl</a></li>
						<li><span class="icon fa-map-marker"></span> Rycardo lyon 1194, Providencia, Santiago</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Fast Courier <a href="">RESERVADOS</a>. Imagenes <a href="">PROPIETARIAS.</a>
				</div>
			</footer>

	
		   <!-- Scripts -->
                <script src="{{ asset('/js/jquery.min.js')}}"></script>
                <script src="{{ asset('/js/jquery.scrolly.min.js')}}"></script> 
                <script src="{{ asset('/js/skel.min.js')}}"></script> 
                <script src="{{ asset('/js/util.js')}}"></script>
                <script src="{{ asset('/js/main.js')}}"></script> 
                 	

	</body>
             
</html>

