<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">Blog J y R</a></h1>
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
                            <a href="singlethree.blade.php">
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
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">@yield('Titulo')</a></h2>
										<p>@yield('Subtitulo')</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">November 1, 2015</time>
										<a href="#" class="author"><span class="name">Emmanuel Servin</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
                                @yield('imagen')
                                @yield('Contenido')
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

					</div>

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

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>