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
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		
	
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
								<h2 class="align-center"><?php echo $this->lang->line('createuser');?></h2>
								<hr />
								<form action="<?php echo base_url(),'index.php/Cprotection/connection';?>" method="post">
									<div class="field half first">
										<label for="name"><?php echo $this->lang->line('username');?></label>
										<input name="username" id="username" type="text" placeholder="<?php echo $this->lang->line('username');?>">
									</div>
									<div class="field half">
										<label for="email"><?php echo $this->lang->line('password');?></label>
										<input name="password" id="password" type="password" placeholder="<?php echo $this->lang->line('password');?>">
									</div>
									
									<ul class="actions align-center">
                                    <li><input type="submit" value="<?php echo $this->lang->line('register');?>"></li>
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

		<!-- Four -->
			<section id="help" class="wrapper style3">
				<div class="inner">

					<header class="align-center">
						<h2><?php echo $this->lang->line('help');?></h2>
						<p><?php echo $this->lang->line('helpbody');?></p>
					</header>

				</div>
			</section>


		<!-- Four -->
	


	
		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					<section>
						<div class="box">
							<div class="content">
							
							</div>
						</div>
					</section>
					<div class="copyright">
					<ul class="icons">
												<li><a href="www.twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="www.facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="www.instagram.com" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="www.github.com" class="icon fa-github"><span class="label">Github</span></a></li>
											</ul>
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