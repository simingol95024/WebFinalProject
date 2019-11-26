<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>JRS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<header id="header" >
		<div class="logo"><a href="<?=base_url()?>index.php/Caccount/index"><?php echo $this->lang->line('home');?></a></div>
		<a href="<?=base_url()?>index.php/Caccount/login_user"><?php echo $this->lang->line('login');?></a>
			
				<a href="<?php echo base_url();?>index.php/Cptotection/index"><?php echo $this->lang->line('protection');?></a>
			
				<?php echo anchor('Caccount/lang_load/english',"English");?>
			<?php echo anchor('Caccount/lang_load/dari',"Dari");?>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
		<nav id="menu">
		<ul class="links">
				<li><a href="<?=base_url()?>index.php/Ccourse/index"><?php echo $this->lang->line('courses');?></a></li>
					<li><a href="<?=base_url()?>index.php/Cclass/index"><?php echo $this->lang->line('classes');?></a></li>
					<li><a href="<?=base_url()?>index.php/Cteacher/index"><?php echo $this->lang->line('teachers');?></a></li>
					<li><a href="<?=base_url()?>index.php/Csubject/index"><?php echo $this->lang->line('subjects');?></a></li>
					<li><a href="<?=base_url()?>index.php/Caccount/listAccount"><?php echo $this->lang->line('accounts');?></a></li>
					<li><a href="<?=base_url()?>index.php/Caccount/admin"><?php echo $this->lang->line('editaccount');?></a></li>
					<li><a href="<?=base_url()?>index.php/Caccount/login_user"><?php echo $this->lang->line('loginuser');?></a></li>
					<li><a href="<?php echo base_url();?>index.php/Caccount/logout_admin"><?php echo $this->lang->line('logoutadmin');?></a></li>
					<li><a href="<?php echo base_url();?>index.php/Cprotection/index"><?php echo $this->lang->line('protection');?></a></li>
				</ul>
			</nav>
		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" data-video="images/banner">
				<div class="inner">
					
					<table  data-mode="columntoggle" class="ui-responsive" >
						<tr>
						<td><h1><?php echo anchor('Cprotection/backup',"Backup");?></h1></td>
						
						
						<td><h1><?php echo anchor('Cprotection/lock',"Lock");?></h1></td>
						</tr>
						<tr>
						<td><h1><?php echo anchor('Cprotection/encreption',"Encreption");?></h1></td>
					
						<td><h1><?php echo anchor('Cprotection/restore_view',"Recovery");?></h1></td>


						<td><h1><?php echo anchor('Cprotection/list_dbs',"list of DBs");?></h1></td>
						</tr>
						<tr>
						<td><h1><?php echo anchor('Cprotection/connection_view',"Connection");?></h1></td>

						<td><h1><?php echo anchor('Cprotection/create_user_load',"New User");?></h1></td>
						<td><h1><?php echo anchor('Cprotection/export_csv',"export db into csv");?></h1></td>	
					</tr>
					</table>
			
			
			
			
				</div>
			</section>

		<!-- One -->

		<!-- Two -->
			
		<!-- Three -->
			<section id="history" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2>Lorem ipsum dolor</h2>
										<p>maecenas feugiat ex purus, quis volutpat lacus placerat</p>
									</header>
									<hr />
									<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2>Vestibulum sit amet</h2>
										<p>mattis sapien pretium tellus venenatis</p>
									</header>
									<hr />
									<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2>Lorem ipsum dolor</h2>
										<p>maecenas feugiat ex purus, quis volutpat lacus placerat</p>
									</header>
									<hr />
									<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2>Lorem ipsum dolor</h2>
										<p>maecenas feugiat ex purus, quis volutpat lacus placerat</p>
									</header>
									<hr />
									<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Four -->
		

		<!-- Footer -->
			<footer id="contact" class="wrapper">
				<div class="inner">
					<section>
						<div class="box">
							<div class="content">
								<h2 class="align-center">Get in Touch</h2>
								<hr />
								
							</div>
						</div>
					</section>
					<div class="copyright">
						<a href="https://www.telegram.com/">Telegram </a>------ <a href="https://www.facebook.com/">facebook</a>-------<a href="http://www.gmail.com/">Gmail</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/skel.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/util.js"></script>
			<script src="<?php echo base_url();?>assets/js/main.js"></script>

	</body>
</html>