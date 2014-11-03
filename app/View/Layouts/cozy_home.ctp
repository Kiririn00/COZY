<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Home Page</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('cozy_home');	

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id='header_bg'>
	 <div id='content_layout'>
		<div id='logo'>
			<?php echo $this->Html->image('logo.png') ?>
		</div>
		<!--<div id='menu_tab'>
			<div id='menu_tab_border1'></div>
			<div id='menu_tab_border2'></div>
			!-->
			<div id='menu_tab_text'>			
				<span id='menu_text'>HOME</span>
				<span id='menu_text'>Project</span>
				<span id='menu_text'>New & Event</span>
				<span id='menu_text'>TIPS</span>
				<span id='menu_text'>About us</span>
				<span id='menu_text'>Contact us</span>
				<span id='menu_icon'></span>
			</div>
			<!--
			<div id='menu_tab_border1'></div>
			<div id='menu_tab_border2'></div>
			-->
		<!--</div>-->
		<div id='header_topic'>
			<span id='header_button_text'>เข้าร่วมโครงการ</span>

			<div id='header_topic_sqare'>
				<div id='header_topic_text'>"บ้านเราอยู่สบาย<br/>&nbspสไตล์คนรุ่นใหม่"&nbsp</div>
			</div>
			<div id='header_button'>
				<div id='header_button_border'></div>
			</div>
		</div>
		<div id='menu_button_tab'>
			<div id='menu_button'>
				<?php echo $this->Html->image('menu1.jpg'); ?>
			</div>
			<div id='menu_button'>
				<?php echo $this->Html->image('menu2.jpg'); ?>				
			</div>
			<div id='menu_button'>
				<?php echo $this->Html->image('menu3.jpg'); ?>	
			</div>
			<div id='menu_button'>
				<?php echo $this->Html->image('menu4.jpg'); ?>
			</div>											
		</div>
	</div><!-- end #content_layout -->

	
	</div><!-- end #header_bg -->

	<!--include other view -->
	<div id='content_layout'>
	<?php echo $this->fetch('content'); ?>
	</div>
	

	<div id='footer_border'></div>
	<div id='footer_bg'>
		<div id='footer_big_block'>
			<div id='footer_block'>
				<div id='footer_topic'>ABOUT US</div>
				<div id='footer_detail'>
				บริษัทแบงคอก นิวเทรนด์ ดีเวลอปเมนท์ จำกัด ก่อตั้งขึ้นในปี 
				พ.ศ. 2553 เพื่อประกอบธุรกิจพัฒนาอสังหาริมทรัพย์ โดยทีมผู้บริหารมืออาชีพที่เป็นวิศวกรและสถาปนิก ซึ่งมีความเชี่ยวชาญ และมีประสบการณ์ด้านอสังหา					ริมทรัพย์ กว่า 25 ปี	
				</div>
			</div>
			<div id='footer_block'>
				<div id='footer_topic'>RESOURCES & LINKS</div>
				<div id='footer_detail'>
				Lorem ipsum dolor<br/> 
				Donec a sapien<br/>  
				Cras non nulla eu tellus<br/> 
				Nulla vitae ipsum<br/> 
				Sed at massa id
				</div>	
			</div>
			<div id='footer_block'>
				<div id='footer_topic'>QUICK CONTACT</div>
				<div id='footer_detail'>
				<form action="#" method="get">
					<input type="text" name="email" value="" placeholder="Enter email">
  					<input type="submit" value="Enter!!!"> 
				</form>	
				
				</div>				
			</div>
		</div><!--end #fotter_big_block -->
	</div><!-- end footer bg -->

</body>
</html>

