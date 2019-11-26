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
					
			
				<?php echo anchor('Caccount/lang_load/english',"English");?>
			<?php echo anchor('Caccount/lang_load/dari',"Dari");?>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
				<li><a href="<?php echo base_url();?>index.php/Caccount/home"><?php echo $this->lang->line('back');?></a></li>
                    <li><a href="<?php echo base_url();?>index.php/Caccount/logout_user"><?php echo $this->lang->line('logout');?></a></li>
				</ul>
			</nav>

		<!--Create account -->
				<section id="one" class="wrapper style2">
				<div class="inner">
					<div>
						<div class="box">
							<div class="image fit">
								<img src="images/pic01.jpg" alt="" />
							</div>
					<section>
						<div class="box">
							<div class="content">
							<a href="<?=base_url();?>index.php/Caccount/home" class="button special scrolly"><?php echo $this->lang->line('back');?></a>
								<h2 class="align-center"><?php echo $this->lang->line('newstudent');?></h2>
								<hr />
								<form action="<?=base_url()?>index.php/Cstudent/new_student" method="post" enctype="multipart/form-data">
									<div class="field half first">
										<label for="name"><?php echo $this->lang->line('name');?></label>
										<input name="name" id="name" type="text" placeholder="<?php echo $this->lang->line('name');?>">
									</div>
									<div class="field half">
										<label for="fathername"><?php echo $this->lang->line('fathername');?></label>
										<input name="fathername" id="fathername" type="text" placeholder="<?php echo $this->lang->line('fathername');?>">
                                    </div>
                                    <div class="field half first">
										<label for="lastname"><?php echo $this->lang->line('lastname');?></label>
										<input name="lastname" id="lastname" type="text" placeholder="<?php echo $this->lang->line('lastname');?>">
									</div>
									<div class="field half">
										<label for="phone"><?php echo $this->lang->line('phone');?></label>
										<input name="phone" id="phone"  type="number" placeholder="phone">
                                    </div>
									<div class="field half first">
										<label for="photo"><?php echo $this->lang->line('photo');?></label>
										<input name="photo" id="photo" type="file" placeholder="photo">
									</div>
									<div class="field half">
										<label for="email"><?php echo $this->lang->line('email');?></label>
										<input name="email" id="email" type="email" placeholder="<?php echo $this->lang->line('email');?>">
                                    </div>
									<div class="field half">
										<label for="dirthday"><?php echo $this->lang->line('birthday');?></label>
										<input name="birthday" id="birthday" type="date" placeholder="<?php echo $this->lang->line('birthday');?>">
                                    </div>	
                                    <div class="field half">
										<label for="ssn"><?php echo $this->lang->line('ssn');?></label>
										<input name="ssn" id="ssn" type="number" placeholder="ssn">
                                    </div>
                                    
									<div class="field half">
										<label for="time"><?php echo $this->lang->line('time');?></label>
										<input name="time" id="time" type="time" placeholder="<?php echo $this->lang->line('time');?>">
									</div>
									<div class="field half ">                                    
											<fieldset data-role="controlgroup">
												<legend><?php echo $this->lang->line('gender');?></legend>
											<div class="4u 12u$(small)">
												<input type="radio" id="demo-priority-low" name="gender" >
												<label for="demo-priority-low">Male</label>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="demo-priority-normal" name="gender" checked>
												<label for="demo-priority-normal">Female</label>
											</fieldset>

	
											</div>

                                    <div class="field half first">
										<label for="startdate"><?php echo $this->lang->line('startdate');?></label>
										<input name="startdate" id="startdate" type="date" placeholder="startdate">
									</div>
									<div class="field half">
										<label for="finishdate"><?php echo $this->lang->line('finishdate');?></label>
										<input name="finishdate" id="finishdate" type="date" placeholder="finishdate">
                                    </div>
									<div class="field half first">
										<label for="location"><?php echo $this->lang->line('location');?></label>
										<input name="location" id="location" type="text" placeholder="location">
									</div>
                                    
						
											<hr>
											
                                    
											<input type="submit" value="<?php echo $this->lang->line('insert');?>"/>
											<a href="#" class="button special scrolly"><?php echo $this->lang->line('cancel');?></a>
									
									</div>
							
								</form>
							</div>
						</div>
					</section>
					</div>
				</div>
			</section>	
				</div>
			</section>




		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					
					
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