		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title><?php bloginfo('name')?></title>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/style.css">
				<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/materialize.min.css">
		</head>
		<body>


			
			<div class="menu-lateral">
				<div class="logo">
					<img src="<?php bloginfo('template_directory'); ?>/img/logo.gif">
				</div>


				<ul id="menu">
					<li>Home</li>
					<li>Sobre</li>
					<li>Projetos</li>
					<li>Blog</li>
					<li>Doações</li>
				</ul>

				<div class="social">
					<img src="<?php bloginfo('template_directory'); ?>/img/facebook.svg">
					<img src="<?php bloginfo('template_directory'); ?>/img/instagram.svg">
				</div>

			</div>


			<div class="container-centro">
				<div class="row">
				
				<?php
						for ($i = 1; $i <= 20; $i++) {
					?>

						    <div class="col s12 m4">
						      <div class="card grey" style="position: relative;">
						      	<div class="sobre">
						      		<button>Visualizar detalhes</button>
						      		<p>Doar para o projeto</p>
						      	</div>
						        <!-- <div class="card-content white-text">
						          
						        </div> -->
						        <div class="card-image">
						          <img src="<?php bloginfo('template_directory'); ?>/img/thumb.png">
						          <span class="card-title">Social</span>
						        </div>
						        
						      </div>
						    </div>

					<?php } ?>

					</div>
			</div>


					

				

					







		</body>
		</html>