<div id='project_body1'>
 <div id='content_layout'>
	<div id='home_body1_image_tab'>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('home_pic1.jpg'); ?>
			</div>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('home_pic1.jpg'); ?>
			</div>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('home_pic1.jpg'); ?>
			</div>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('home_pic1.jpg'); ?>
			</div>
	</div>
	<div id='select_field'>	
		<div id='topic1_body3'>
			<div id='icon'>
				<?php echo $this->Html->image('icon.png'); ?>				
			</div>
			<div id='topic_body3_text'>LASTEST PROJECT</div>
		</div><!-- end #topic_body3 -->

		<div id='select_form'>
			<div id='select_form_topic'>
				ค้นหาโครงการ
			</div>

			<div id='select_form_option'>
			<?php
			echo $this->Form->input('field', array(
   			 'options' => array('บ้านเดี่ยว', 'คอนโดมีเนียม', 'ทาวโฮมส์', 'อื่นๆ'),
			 'empty' => 'ประเภทโครงการ',
			 'label' => false
			));
			?>
			<?php
			echo $this->Form->input('field', array(
   			 'options' => array(1, 2, 3, 4, 5),
			 'empty' => 'ทำเลที่ตั้งโครงการ',
			 'label' => false
			));
			?>
			<?php
			echo $this->Form->input('field', array(
   			 'options' => array(1, 2, 3, 4, 5),
			 'empty' => 'ราคาเริ่มต้น',
			 'label' => false
		 	));
			
			?>
			</div>
			<?php
				echo $this->Form->input('ค้นหา',array(
				'type' => 'button',
				'label' => false,
				'id' => 'select_form_button'
			));

			?>		
		</div><!-- end #select_form -->
	</div>
	
	<div id='content_body3_field'>
			<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ CHOKCHAI 4 SOI 84 
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				จำนวน 5 ยูนิต 			
				<br/><br/>
				SOLD OUT
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',0
					));
				?>
				</div>
			</div>
		<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 2 - 29 
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				จำนวน 6 ยูนิต				
				<br/><br/>
				SOLD OUT 
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',1
					));
				?>
				</div>
			</div>

		<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 2 – 10 
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				จำนวน 6 ยูนิต	
				<br/><br/>
				SOLD OUT 
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',2
					));
				?>
				</div>
			</div>

	</div><!-- end #content_body3_field -->

		<div id='content_body3_field'>
			<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 2 – 29 แยก 4  
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				จำนวน 5 ยูนิต  
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',3
					));
				?>
				</div>
			</div>
		<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ NAKNIWAT 37 
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				จำนวน 9 ยูนิต	
				<br/><br/>
				SOLD OUT และ sales office  ใหม่จะตั้ง ณ โครงการนี้แทนสตรีวิทยา  2-29 		
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',4
					));
				?>
				</div>
			</div>
		<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
					COZY @ NAKNIWAT 24 
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				จำนวน 5 ยูนิต   
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',6
					));
				?>
				</div>
		</div>

	</div><!-- end #content_body3_field -->
	<div id='content_body3_field'>
		<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ CHOKCHAI 4 SOI 78 
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				จำนวน 2 ยูนิต  
				<br/><br/>
				SOLD OUT 
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',7
					));
				?>
				</div>
			</div>

		<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ SANGKOMSONGKROR 16
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				จำนวน 2 ยูนิต  
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',8
					));
				?>
				</div>
			</div>

	</div><!-- end #content_body3_field -->
	
	<div id='load_button_field'>
		<?php
			echo $this->Form->input('Loadmore',array(
				'type' => 'button',
				'label' => false,
				'id' => 'load_button'
			));
		?>
	</div>
	
	<div id='border1_body3'></div>
	<div id='border2_body3'></div>
	
	<div id="topic1_body3">
			<div id="icon">
				<?php echo $this->Html->image('icon.png'); ?>			
			</div>
			<div id="topic_body3_text">NEWS &amp; EVENT</div>
			<div id="topic_body3_text2">VIEW ALL EVENT .</div>
	</div>
	
	<div id="content_body3_field">
			<div id="content_body3">
			<?php echo $this->Html->image('event.jpg');?>
				<span id="content_topic">
					CHOKCHAI 4 - 6
				</span>
				<div id="content_border"></div>
				<div id="content_detail">
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br><br>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br><br>
				<a href="/COZY/UI/Event">
				<?php echo $this->Html->image('read_more.jpg'); ?>
					
				</a>
				</div>
			</div>
			<div id="content_body3">
			<?php echo $this->Html->image('event.jpg');?>
			<span id="content_topic">
					CHOKCHAI 4 - 6
				</span>
				<div id="content_border"></div>
				<div id="content_detail">
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br><br>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br><br>
				<a href="/COZY/UI/Event">
					<?php echo $this->Html->image('read_more.jpg'); ?>
</a>				</div>
			</div>
			<div id="content_body3">
			<?php echo $this->Html->image('event.jpg');?>
			<span id="content_topic">
					CHOKCHAI 4 - 6
				</span>
				<div id="content_border"></div>
				<div id="content_detail">
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br><br>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br><br>
				<a href="/COZY/UI/Event">
				<?php echo $this->Html->image('read_more.jpg'); ?>
</a></div>
			</div>
		
		</div>

 </div><!-- end #content_layout -->
</div><!-- end #project_body1 -->

