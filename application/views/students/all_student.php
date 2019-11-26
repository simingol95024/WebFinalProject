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
	
                                <h2 class="align-center"><?php echo $this->lang->line('allstudent');?></h2>
                                <hr />
								<table data-role="table"  data-mode="columntoggle" class="ui-responsive" id="myTable">
									<tbody>
                                    <?php
                                    foreach($student as $row){?>
										<tr>
										<th ><?php echo $this->lang->line('id');?></th>
										<th ><?php echo $this->lang->line('photo');?></th>
										
										<th><?php echo $this->lang->line('name');?></th>
										<th ><?php echo $this->lang->line('fathername');?></th>
			
								
										<th ><?php echo $this->lang->line('ssn');?></th>
										<th><?php echo $this->lang->line('edit');?></th>
										<th ><?php echo $this->lang->line('delete');?></th>
										<th ><?php echo $this->lang->line('more');?></th>
									</tr>
                                
									<tr>
					
										<td> <?= $row->s_id; ?></td>
										<td> <img src="<?=base_url()?>assets/upload/<?= $row->photo; ?> "width="50" height="50"></td>
										<td> <?= $row->s_name; ?></td>
										<td> <?= $row->s_fathername; ?></td>
										<td> <?= $row->ssn; ?></td>
										<td>
                                           <a href="<?php echo base_url().'index.php/Cstudent/edit/'.$row->s_id;?>" ><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></td>
                                          <td> <a href="<?php echo base_url().'index.php/Cstudent/drop_student/'.$row->s_id;?>"><button data-toggle="tooltip" title="Delete" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        </td>

										

										<td> <a href="<?php echo base_url().'index.php/Cstudent/read_more/'.$row->s_id;?>"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        </td>
                                      </tr>  
                                   <?php }
                                    ?>
									</tbody>
									
									</table>
									<div class="custom-pagination">
									<h1> <?php echo $this->pagination->create_links();?><h1>
									</div>
							</div>
							</div>
							
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