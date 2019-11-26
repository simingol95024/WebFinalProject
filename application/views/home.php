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
					<li><a href="<?php echo base_url();?>index.php/Cstudent/index"><?php echo $this->lang->line('allstudent');?></a></li>
					<li><a href="<?php echo base_url();?>index.php/Cstudent/addStudent"><?php echo $this->lang->line('newstudent');?></a></li>
                    <li><a href="<?php echo base_url();?>index.php/Caccount/login"><?php echo $this->lang->line('back');?></a></li>
                    <li><a href="<?php echo base_url();?>index.php/Caccount/logout_user"><?php echo $this->lang->line('logout');?></a></li>
				</ul>
			</nav>


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
                            <h2 class="align-center"><?php echo $this->lang->line('allstudent');?></h2>
								<hr />
								<form action="<?php echo base_url(),"index.php/Cstudent/index"; ?>" method="post">
									<ul class="actions align-center">
										<li><a href="#search" class="button special scrolly"><?php echo $this->lang->line('search');?></a></li>
                                        <li><a href="<?=base_url()?>index.php/Cstudent/addStudent" class="button special scrolly"><?php echo $this->lang->line('insert');?></a></li>
										<!-- <li><a href="<?=base_url()?>index.php/Cstudent/update_student" class="button special scrolly">Update</a></li>
										<li><a href="<?=base_url()?>index.php/Cstudent/drop_student" class="button special scrolly">Delete</a></li> -->
                                        <li><a href="<?php echo base_url();?>index.php/Cstudent/index" class="button special scrolly"><?php echo $this->lang->line('allstudent');?></a></li>

                                    </ul>
								</form>
							</div>
						</div>
					</section>
						</div>
					</div>
				</div>
			</section>


    <!-- Footer -->
    <div id="search" class="wrapper">
                    <div class="inner">
                        <section>
                            <div class="box">
                                <div class="content">
                                    <h2 class="align-center"><?php echo $this->lang->line('searchstudent');?></h2>
                                    <hr />
                                    <form action="<?php echo base_url(),"index.php/Cstudent/searchstudent"; ?>" method="post">
                                        <div class="field half first">
                                            <label for="name"><?php echo $this->lang->line('name');?></label>
                                            <input name="name" id="name" type="text" placeholder="<?php echo $this->lang->line('name');?>">
                                        </div>
                                        <div class="field half first">
                                            <label for="fathername"><?php echo $this->lang->line('fathername');?></label>
                                            <input name="fathername" id="fathername" type="text" placeholder="<?php echo $this->lang->line('fathername');?>">
                                        </div>
                                        <div class="field half first">
                                            <label for="ssn"><?php echo $this->lang->line('ssn');?></label>
                                            <input name="ssn" id="ssn" type="text" placeholder="<?php echo $this->lang->line('ssn');?>">
                                        </div>
                                        <ul class="actions align-center">
                                
										
									<li>	<input type="submit" value="<?php echo $this->lang->line('search');?>"></li>
                                     <li>   <a href="<?=base_url()?>index.php/Caccount/home" class="button special scrolly"><?php echo $this->lang->line('cancel');?></a></li>	
									
										</ul>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
            </div>

		<!-- Scripts -->
			<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/skel.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/util.js"></script>
			<script src="<?php echo base_url();?>assets/js/main.js"></script>

	</body>
</html>