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
			<header id="header" class="alt">
				<!-- <div class="logo"><a href="index2.html">Transitive <span>by TEMPLATED</span></a>
				 -->
				<?php echo anchor('Caccount/lang_load/english',"English");?>
			<?php echo anchor('Caccount/lang_load/dari',"Dari");?>
			

				</div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="#login"><?php echo $this->lang->line('login');?></a></li>
					<li><a href="#info"><?php echo $this->lang->line('info');?></a></li>
					<li><a href="#history"><?php echo $this->lang->line('history');?></a></li>
					<li><a href="#help"><?php echo $this->lang->line('help');?></a></li>
					<li><a href="#contact"><?php echo $this->lang->line('contact');?></a></li>
					
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
					<h1><?php echo $this->lang->line('title');?></h1>
					<p><?php echo $this->lang->line('body');?><br />
					 <a href="https://templated.co/"></a></p>
					<a href="#login" class="button special scrolly"><?php echo $this->lang->line('admin_login');?></a>
					<a href="<?=base_url()?>index.php/Caccount/login_user" class="button special scrolly"><?php echo $this->lang->line('userlogin');?></a>
				</div>
			</section>

		<!-- One -->
			<section id="login" class="wrapper style2">
				<div class="inner">
					<div>
						<div class="box">
							<div class="image fit">
								<img src="images/pic01.jpg" alt="" />
							</div>
											<section>
						<div class="box">
							<div class="content">
								<h2 class="align-center"><?php echo $this->lang->line('welcome_admin');?></h2>
								<hr />
								<form action="<?=base_url()?>index.php/Caccount/Admin_login_validation" method="post">
									<div class="field half first">
										<label for="name"><?php echo $this->lang->line('username');?></label>
										<input name="username" id="username" type="text" placeholder="<?php echo $this->lang->line('username_placeholder');?>">
										<?php echo form_error("name")?>
									</div>
									<div class="field half">
										<label for="password"><?php echo $this->lang->line('password');?></label>
										<input name="password" id="password" type="password" placeholder="<?php echo $this->lang->line('password_placeholder');?>">
										<?php echo form_error("name")?>
									</div>
									
									<ul class="actions align-center">
									<li><input type="submit" value="<?php echo $this->lang->line('login');?>" ></li>
									</ul>
								</form>
							</div>
						</div>
					</section>
						</div>
					</div>
				</div>
			</section>


			

		<!-- Two -->
			<section id="info" class="wrapper style3">
				<div class="inner">
					<div id="flexgrid">
						<div>
							<header>
								<h3><?php echo $this->lang->line('english');?></h3>
							</header>
							<p><?php echo $this->lang->line('englishtitle');?></p>
							<ul class="actions">
								<li><a href="#" class="button alt"><?php echo $this->lang->line('englishmore');?></a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3><?php echo $this->lang->line('computer');?></h3>
							</header>
							<p><?php echo $this->lang->line('computertitle');?></p>
							<ul class="actions">
								<li><a href="#" class="button alt"><?php echo $this->lang->line('computermore');?></a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3><?php echo $this->lang->line('online');?></h3>
							</header>
							<p><?php echo $this->lang->line('englishtitle');?></p>
							<ul class="actions">
								<li><a href="#" class="button alt"><?php echo $this->lang->line('onlinemore');?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="history" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?=base_url()?>images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2><?php echo $this->lang->line('english');?></h2>
										<p><?php echo $this->lang->line('englishtitle');?></p>
									</header>
									<hr />
									<p> <?php echo $this->lang->line('ebody');?></p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?=base_url()?>images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2><?php echo $this->lang->line('computer');?></h2>
										<p><?php echo $this->lang->line('computertitle');?></p>
									</header>
									<hr />
									<p> <?php echo $this->lang->line('cbody');?></p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="help" class="wrapper style3">
				<div class="inner">

					<header class="align-center">
						<h2><?php echo $this->lang->line('help');?></h2>
						<p><?php echo $this->lang->line('helpbody');?></p>
					</header>

				</div>
			</section>

		<!-- Footer -->
			<footer id="contact" class="wrapper">
				<div class="inner">
					<section>
						<div class="box">
							<div class="content">
								<h2 class="align-center"><?php echo $this->lang->line('contact');?></h2>
								<hr />
								<form action="#" method="post">
									<div class="field half first">
										<label for="name"><?php echo $this->lang->line('name');?></label>
										<input name="name" id="name" type="text" placeholder="<?php echo $this->lang->line('name');?>">
									</div>
									<div class="field half">
										<label for="email"><?php echo $this->lang->line('email');?></label>
										<input name="email" id="email" type="email" placeholder="<?php echo $this->lang->line('email');?>">
									</div>
									<div class="field">
										<label for="dept"><?php echo $this->lang->line('course');?></label>
										<div class="select-wrapper">
											<select name="dept" id="dept">
												<option value="">- Category -</option>
												<option value="1"><?php echo $this->lang->line('english');?></option>
												<option value="1"><?php echo $this->lang->line('computer');?></option>
												<option value="1"><?php echo $this->lang->line('online');?></option>
												
											</select>
										</div>
									</div>
									<div class="field">
										<label for="message"><?php echo $this->lang->line('comment');?></label>
										<textarea name="message" id="message" rows="6" placeholder="<?php echo $this->lang->line('comment');?>"></textarea>
									</div>
									<ul class="actions align-center">
										<li><input value="<?php echo $this->lang->line('send');?>" class="button special" type="submit"></li>
									</ul>
								</form>
							</div>
						</div>
					</section>
					<div class="copyright">
					<ul class="icons">
												<li><a href="www.twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="www.facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="www.instagram.com" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="www.github.com" class="icon fa-github"><span class="label">Github</span></a></li>
											</ul>					</div>
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