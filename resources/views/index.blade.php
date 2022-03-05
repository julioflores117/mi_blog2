<!DOCTYPE HTML>
<html>
	<head>
		<title>Blog personal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">{{$team->nombre}}</a></h1>
						<nav class="main">
							<ul>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">						
						<!-- Links -->
						<section>
							<ul class="links">
								<li>
									<a href="singletwo.blade.php">
										<h3>Describir los sistemas con arquitectura Cliente / Servidor</h3>
										<p>UNIDAD 1</p>
									</a>
								</li>
								<li>
									<a href="{{route('siete')}}">
										<h3>Reconocer protocolos de comunicación de red</h3>
										<p>UNIDAD 1</p>
									</a>
								</li>
								<li>
									<a href="singlefour.blade.php">
										<h3>Clasificar los sitemas de información de acuerdo a su arquitectura</h3>
										<p>UNIDAD 1</p>
									</a>
								</li>
								<li>
									<a href="index6.blade.php">
										<h3>Componentes y caracteristicas del Cliente-Servidor</h3>
										<p>UNIDAD 1</p>
									</a>
								</li>
								<li>
									<a href="index2.blade.php">
										<h3>Estrategias de Complegidad</h3>
										<p>UNIDAD 2</p>
									</a>
								</li>
								<li>
									<a href="index3.blade.php">
										<h3>Muiltiniveles</h3>
										<p>UNIDAD 2</p>
									</a>
								</li>
								<li>
									<a href="index4.blade.php">
										<h3>Modelo Vista - Controlador</h3>
										<p>UNIDAD 2</p>
									</a>
								</li>
								<li>
									<a href="index5.blade.php">
										<h3>Sockets</h3>
										<p>UNIDAD 2</p>
									</a>
								</li>
						   </ul>
                        </section>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
	

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="{{route('uno')}}">Definir los sitemas de conexión libre y a travez de redes...</a></h2>
										<p>Introducción a la arquitectura Cliente-Servidor</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-25">Marzo 5, 2022</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="{{route('uno')}}" class="image featured"><img src="images/p1.jpg" alt="" /></a>
								<p>Hace más de 10 años que las computadoras escritorio aparecieron de manera masiva. Esto permitió que parte apreciable de la carga de trabajo de cómputo tanto en el ámbito de cálculo como en el ámbito de la presentación se lleven a cabo desde el escritorio del usuario.</p>
								<footer>
									<ul class="actions">
										<li><a href="{{route('uno')}}" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

							

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="{{route('dos')}}">Describir los sistemas con arquitectura Cliente / Servidor</a></h2>
										<p>Introducción a la arquitectura Cliente-Servidor</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2022-03-05">Marzo 5, 2022</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="{{route('dos')}}" class="image featured"><img src="images/p2.jpg" alt="" /></a>
								<p>En esta arquitectura la computadora de cada uno de los usuarios, llamada cliente, produce una demanda de información a cualquiera de las computadoras que proporcionan información, conocidas como servidores estos últimos responden a la demanda del cliente que la produjo.
									Los clientes y los servidores pueden estar conectados a una red local o una red amplia, como la que se puede implementar en una empresa o a una red mundial como lo es la Internet.</p>
								<footer>
									<ul class="actions">
										<li><a href="{{route('dos')}}" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

							<article class="post">
								<header>
									<div class="title">
										<h2><a href="{{route('tres')}}">Reconocer los conceptos de sistemas de infromación.</a></h2>
										<p>Introducción a la arquitectura Cliente-Servidor</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">Marzo 5, 2022</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="{{route('tres')}}" class="image featured"><img src="images/pc1.jpg" alt="" /></a>
								<p>Un sistema de información es un conjunto de componentes que interactúan entre sí con un fin común.</p>
								<p>En informática, los sistemas de información ayudan a administrar, recolectar, recuperar, procesar, almacenar y distribuir información relevante para los procesos fundamentales y las particularidades de cada organización.</p>
								<footer>
									<ul class="actions">
										<li><a href="{{route('tres')}}" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

							<article class="post">
								<header>
									<div class="title">
										<h2><a href="{{route('cuatro')}}">EVOLUCION DE LOS SISTEMAS DE INFORMACION</a></h2>
										<p>Cliente-Servidor</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">Marzo 5, 2022</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="{{route('cuatro')}}" class="image featured"><img src="images/pc2.jpg" alt="" /></a>
								<p>La evolución de los sistemas de información expone el desarrollo de estos métodos que cumplen la tarea de organizar y administrar recursos, motivo por el que muchos dicen que son tan antiguos como la civilización misma.</p>
								<footer>
									<ul class="actions">
										<li><a href="{{route('cuatro')}}" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

							<article class="post">
								<header>
									<div class="title">
										<h2><a href="{{route('cinco')}}">CLIENTE-SERVIDOR</a></h2>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">Marzo 5, 2022</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="{{route('cinco')}}" class="image featured"><img src="images/pc3.png" alt="" /></a>
								<p>La expresión cliente servidor se utiliza en el ámbito de la informática. En dicho contexto, se llama cliente al dispositivo que requiere ciertos servicios a un servidor. La idea de servidor, por su parte, alude al equipo que brinda servicios a las computadoras (ordenadores) que se hallan conectadas con él mediante una red.</p>
								<footer>
									<ul class="actions">
										<li><a href="{{route('cinco')}}" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

							<article class="post">
								<header>
									<div class="title">
										<h2><a href="{{route('seis')}}">SISTEMAS DE COMPUTADORAS CENTRALES Y DEDICADAS</a></h2>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">Marzo 5, 2022</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="{{route('seis')}}" class="image featured"><img src="images/pc4.jpg" alt="" /></a>
								<p>Una computadora central (en inglés mainframe )es una computadora grande, potente y costosausada principalmente por una gran compañíapara el procesamiento de una gran cantidad dedatos; por ejemplo, para el procesamiento detransacciones bancarias.</p>
								<footer>
									<ul class="actions">
										<li><a href="{{route('seis')}}" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

							<article class="post">
								<header>
									<div class="title">
										<h2><a href="index6.blade.php"></a>Componentes y características del Cliente/Servidor</h2>
										<p>Componentes y características del Cliente/Servidor</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-22">Febrero 20, 2021</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="index6.blade.php" class="image featured"><img src="images/pn4.jpg" alt="" /></a>
								
								
								<footer>
									<ul class="actions">
										<li><a href="index6.blade.php" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
							<article class="post">
								<h2>Temas de la unidad II</h2>
								
							</article>

							<article class="post">
								<header>
									<div class="title">
										<h2><a href="index2.blade.php">Estrategias de complejidad</a></h2>
										<p>Estrategias de complejidad</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-22">Febrero 20, 2021</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="index2.blade.php" class="image featured"><img src="images/cliente_cerv_bd.jfif" alt="" /></a>
								<footer>
									<ul class="actions">
										<li><a href="index2.blade.php" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

							<article class="post">
								<header>
									<div class="title">
										<h2><a href="index3.blade.php"></a>Muiltiniveles</h2>
										<p>Muiltiniveles</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-22">Febrero 20, 2021</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="index3.blade.php" class="image featured"><img src="images/pn5.jpg" alt="" /></a>

								
								<footer>
									<ul class="actions">
										<li><a href="index3.blade.php" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="index4.blade.php"></a>Modelo Vista-Controlador</h2>
										<p>Modelo Vista-Controlador</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-22">Febrero 20, 2021</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="index4.blade.php" class="image featured"><img src="images/pn6.jpg" alt="" /></a>
								
								
								<footer>
									<ul class="actions">
										<li><a href="index4.blade.php" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="index5.blade.php"></a>Sockets</h2>
										<p>Sockets</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-10-22">Febrero 20, 2021</time>
										<a href="#" class="author"><span class="name">ROBERTO AND JULIO</span><img src="images/man-icon.png" alt="" /></a>
									</div>
								</header>
								<a href="index5.blade.php" class="image featured"><img src="images/java-socket.jpg" alt="" /></a>
								
								
								<footer>
									<ul class="actions">
										<li><a href="index5.blade.php" class="button large">Continuar Leyendo</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
								<header>
									<h2 style="color: brown;">Blog personal</h2>
									
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="{{route('siete')}}">Reconocer protocolos de comunicación de red</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
												<a href="" class="author"><img src="images/man-icon.png" alt="" /></a>
											</header>
											<a href="{{route('siete')}}" class="image"><img src="images/p3.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="{{route('ocho')}}">Clasificar los sitemas de información de acuerdo a su arquitectura</a></h3>
												<time class="published" datetime="2015-10-19">October 19, 2015</time>
												<a href="#" class="author"><img src="images/man-icon.png" alt="" /></a>
											</header>
											<a href="{{route('ocho')}}" class="image"><img src="images/p4.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<!-- <article class="mini-post">
											<header>
												<h3><a href="single.php">Odio congue mattis</a></h3>
												<time class="published" datetime="2015-10-18">October 18, 2015</time>
												<a href="#" class="author"><img src="images/man-icon.png" alt="" /></a>
											</header>
											<a href="single.php" class="image"><img src="images/pic06.jpg" alt="" /></a>
										</article> -->

									<!-- Mini Post -->
										<!-- <article class="mini-post">
											<header>
												<h3><a href="single.php">Enim nisl veroeros</a></h3>
												<time class="published" datetime="2015-10-17">October 17, 2015</time>
												<a href="#" class="author"><img src="images/man-icon.png" alt="" /></a>
											</header>
											<a href="single.php" class="image"><img src="images/pic07.jpg" alt="" /></a>
										</article> -->

								</div>
							</section>

						<!-- Posts List -->
							<!-- <section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="single.php">Lorem ipsum fermentum ut nisl vitae</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
											</header>
											<a href="single.php" class="image"><img src="images/pic08.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.php">Convallis maximus nisl mattis nunc id lorem</a></h3>
												<time class="published" datetime="2015-10-15">October 15, 2015</time>
											</header>
											<a href="single.php" class="image"><img src="images/pic09.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.php">Euismod amet placerat vivamus porttitor</a></h3>
												<time class="published" datetime="2015-10-10">October 10, 2015</time>
											</header>
											<a href="single.php" class="image"><img src="images/pic10.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.php">Magna enim accumsan tortor cursus ultricies</a></h3>
												<time class="published" datetime="2015-10-08">October 8, 2015</time>
											</header>
											<a href="single.php" class="image"><img src="images/pic11.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.php">Congue ullam corper lorem ipsum dolor</a></h3>
												<time class="published" datetime="2015-10-06">October 7, 2015</time>
											</header>
											<a href="single.php" class="image"><img src="images/pic12.jpg" alt="" /></a>
										</article>
									</li>
								</ul>
							</section> -->

						<!-- About -->
							<!-- <section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>
							</section> -->

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>