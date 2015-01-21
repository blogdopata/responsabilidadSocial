<html>
<head>
	<title>Responsabilidad Social - USMP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<aside id="arriba">
	<div id="arriba_center">
		<a href="index.php?pag=inicio" id="home">inicio</a>
		<div id="redes">
			<a href="#" id="rss"><img src="img/rss.png"></a>
			<a href="#" id="utube"><img src="img/utube.png"></a>
			<a href="#" id="face"><img src="img/face.png"></a>	
			<a href="#" id="twitter"><img src="img/twitter.png"></a>
		</div>
	</div>
</aside>

<header>
	<figure>
		<img src="img/logo.png" alt="Responsabilidad Social">
	</figure>	
	<div id="buscador">
		<input type="search">
	</div>
</header>

<nav id="menu">
	<ul>
		<li><a href="index.php?pag=quienes" alt="#">¿QUIÉNES SOMOS?</a></li><li><a href="index.php?pag=quehacemos" alt="#">¿QUÉ HACEMOS?</a></li><li><a href="#" alt="#">PROYECTOS</a></li><li><a href="#" alt="#">PUBLICACIONES</a></li><li><a href="#" alt="#">NOTICIAS Y EVENTOS</a></li><li><a href="#" alt="#">CONTÁCTENOS</a></li>
	</ul>
</nav>

<div id="cambio">
	

	  <?php 				
                            if(isset($_GET['pag']))
                            {
                                $pagina=$_GET['pag'];
                                include("victor_paginas.php");			
                                include($paginas[$pagina]);
                            }
                            else{ 
                                include("inicio.php");

                            }?>
</div> <!-- FIN DIV cambio -->

        <!-- lo mas visto -->
        <div id="masVisto">
            <div class="centro">
                <p class="textoVi"><span id="span"></span>LO MÁS VISTO</p>  
                <div id="visto">
                    <div class="vista">
                        <ul class="lista">
                            <li>Item 1
                            </li>
                            <li>Item 2
                            </li>
                            <li>Item 3
                            </li>
                            <li>Item 4
                            </li>
                        </ul>
                    </div>
                    <div class="vista">
                        <ul class="lista">
                            <li>Item 1
                            </li>
                            <li>Item 2
                            </li>
                            <li>Item 3
                            </li>
                            <li>Item 4
                            </li>
                        </ul>
                    </div>
                    <div class="vista">
                        <ul class="lista">
                            <li>Item 1
                            </li>
                            <li>Item 2
                            </li>
                            <li>Item 3
                            </li>
                            <li>Item 4
                            </li>
                        </ul>
                    </div>
                    <div class="vista" id="view">
                        <p id="texto">Comité de Responsabilidad <br>Empresarial </p>

                        <ul class="lista">
                            <li><img src="img/phone.png" class="imgv"> <span class="guia">(01) 362-00-64 <br>(01)362-00-64</span>
                            
                            </li>
                            <li><img src="img/loca.png" class="imgv"><span class="guia">A.v Las Calandrias s/n <br> Santa Anita <br>Lima, Perú</span>
                            
                            </li>
                            <li><img src="img/mail.png" class="imgv"><span class="guia">rse@usmp.pe<br>webmaster@usmp.pe</span>
                            
                            </li>
                            
                        </ul>
                    </div>

                </div>
            </div>
        </div>



	<footer>
		<p> © Copyright 2015 Universidad San Martin de Porres. Todos los derechos reservados</p>
	</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</body>
</html>