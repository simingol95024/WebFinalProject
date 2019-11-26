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
				<li><a href="<?php echo base_url();?>index.php/Caccount/login"><?php echo $this->lang->line('back');?></a></li>
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
								<H2 class="align-center"><?php echo $this->lang->line('editstudent');?></H2>
								<hr>
								<form action="<?php echo base_url().'index.php/Cstudent/edit_student/'.$student['s_id'];?>" method="post">
                                
                                <div class="field half first">
								<label ><?php echo $this->lang->line('name');?></label>
								<input type="text" name="name" value="<?=$student['s_name']?>">
									</div> 
                                <div class="field half">
								<label ><?php echo $this->lang->line('fathername');?></label>
								<input type="text" name="fathername" value="<?=$student['s_fathername']?>">
                                </div> 
                                <div class="field half first">
								<label ><?php echo $this->lang->line('lastname');?></label>
								<input type="text" name="lastname" value="<?=$student['s_lastname']?>">
									</div> 
                                <div class="field half">
								<label ><?php echo $this->lang->line('phone');?></label>
								<input type="number" name="phone" value="<?=$student['phone']?>">
								</div> 
                                <div class="field half first">
								<label ><?php echo $this->lang->line('photo');?></label>
								<input type="file" name="photo" value="<?=$student['photo']?>">
								</div>
								<div class="field half ">
								<label ><?php echo $this->lang->line('email');?></label>
								<input type="email" name="email" value="<?=$student['email']?>">
									</div> 
                                <div class="field half first">
								<label ><?php echo $this->lang->line('birthday');?></label>
								<input type="date" name="birthday" value="<?=$student['birthday']?>">
                                </div> 
                                <div class="field half ">
								<label ><?php echo $this->lang->line('ssn');?></label>
								<input type="number" name="ssn" value="<?=$student['ssn']?>">
									</div> 
								<div class="field half first">
								<label ><?php echo $this->lang->line('time');?></label>
								<input type="time" name="time" value="<?=$student['time']?>">
								</div> 
                                <div class="field half">
								<label ><?php echo $this->lang->line('startdate');?></label>
								<input type="date" name="startdate" value="<?=$student['startdate']?>">
								</div> 
                                <div class="field half first">
								<label ><?php echo $this->lang->line('finishdate');?></label>
								<input type="date" name="finishdate" value="<?=$student['finishdate']?>">
								</div>
								
                                <div class="field half">
								<label ><?php echo $this->lang->line('location');?></label>
								<input type="text" name="location" value="<?=$student['location']?>">
                                </div> 
								<div class="field half first"> 
								<label ><?php echo $this->lang->line('gender');?></label>                                   
											<fieldset data-role="controlgroup">
												<legend>Choose your gender:</legend>
												<label for="male">Male</label>
												<input type="radio" name="gender" id="male" value="male">
												<label for="female">Female</label>
												<input type="radio" name="gender" id="female" value="female">
											</fieldset>
								</div>
                             
								<input type="submit" value="<?php echo $this->lang->line('edit');?>" />
					
                                <a href="<?=base_url();?>index.php/Cstudent/index" class="button special scrolly"><?php echo $this->lang->line('cancel');?></a>	
	
                                </form>
                                                            
								
							
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