<div id='home_body1'>
 <div id='content_layout'>
	<div id='home_block1'>
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
		<div id='home_body1_text_field'>
			<div id='home_body1_text'>
				“ ฉีกกฏคำว่า บ้าน ”
			</div>
			<div id='home_body1_text'>
				“ ฉีกกฏคำว่า บ้าน ”
			</div>
			<div id='home_body1_text'>
				“ ฉีกกฏคำว่า บ้าน ”
			</div>
			<div id='home_body1_text'>
				“ ฉีกกฏคำว่า บ้าน ”
			</div>
		</div>
		<div id='home_body1_button_field'>
			<div id='home_body1_button'>
				<div id='home_body1_button_text'>เข้าชมโครงการ</div>
			</div>			
		</div>
		<div id='home_body1_button_field'>
			<div id='home_body1_button'>
				<div id='home_body1_button_text'>เข้าชมโครงการ</div>
			</div>			
		</div>
		<div id='home_body1_button_field'>
			<div id='home_body1_button'>
				<div id='home_body1_button_text'>เข้าชมโครงการ</div>
			</div>			
		</div>
		<div id='home_body1_button_field'>
			<div id='home_body1_button'>
				<div id='home_body1_button_text'>เข้าชมโครงการ</div>
			</div>			
		</div>

	</div><!--end #home_block1 -->
 </div><!--end #content_layout -->
</div><!--end home_body1 -->

<div id='home_body2'>
 <div id='content_layout'>
	<?php echo $this->Html->image('body2.jpg'); ?>
 </div>
</div><!-- end #home_body2 -->
<div id='home_body3'>
 <div id='content_layout'>
	<div id='block1_body3'>
		<div id='topic1_body3'>
			<div id='icon'>
				<?php echo $this->Html->image('icon.png'); ?>				
			</div>
			<div id='topic_body3_text'>LOCATION SEARCH</div>
		</div><!-- end #topic_body3 -->
		<div id='map_body3'>
		<?php echo $this->Html->image('map.jpg'); ?>
		</div>
	</div><!-- end #block1_body3 -->

	<div id='border1_body3'></div>
	<div id='border2_body3'></div>

	<div id='block2_body3'>
		<div id='topic1_body3'>
			<div id='icon'>
				<?php echo $this->Html->image('icon.png'); ?>				
			</div>
			<div id='topic_body3_text'>LAST PROJECT</div>
			<div id='topic_body3_text2'>VIEW ALL PRODUCTS .</div>
		</div><!-- end #topic_body3 -->	
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
	
	</div><!-- end #block2_bofy3 -->

	<div id='border1_body3'></div>
	<div id='border2_body3'></div>
		<div id='topic1_body3'>
			<div id='icon'>
				<?php echo $this->Html->image('icon.png'); ?>				
			</div>
			<div id='topic_body3_text'>NEWS & EVENT</div>
			<div id='topic_body3_text2'>VIEW ALL EVENT .</div>
		</div><!-- end #topic_body3 -->		
		<div id='content_body3_field'>
			<div id='content_body3'>
				<?php echo $this->Html->image('event.jpg'); ?>
				<span id='content_topic'>
					CHOKCHAI 4 - 6
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br/><br/>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br/><br/>
				<?php
					echo $this->Html->image('read_more.jpg',array(
						'url' => array('action' => 'Event')
					))

				?>
				</div>
			</div>
			<div id='content_body3'>
				<?php echo $this->Html->image('event.jpg'); ?>
				<span id='content_topic'>
					CHOKCHAI 4 - 6
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br/><br/>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br/><br/>
				<?php
					/*	
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'Detail',
					));
					 */

					echo $this->Html->image('read_more.jpg',array(
						'url' => array('action' => 'Event')
					))
				?>
				</div>
			</div>
			<div id='content_body3'>
				<?php echo $this->Html->image('event.jpg'); ?>
				<span id='content_topic'>
					CHOKCHAI 4 - 6
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br/><br/>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br/><br/>
				<?php
					echo $this->Html->image('read_more.jpg',array(
						'url' => array('action' => 'Event')
					))

				?>
				</div>
			</div>
		
		</div>
		<div id='border1_body3'></div>
		<div id='border2_body3'></div>
		
		<div id='topic1_body3'>
			<div id='icon'>
				<?php echo $this->Html->image('icon.png'); ?>				
			</div>
			<div id='topic_body3_text'>TIPS OF THE DAY</div>
			<div id='topic_body3_text2'>VIEW ALL TIPS .</div>

		</div><!-- end #topic_body3 -->	
		<div id='content_body3_field2'>
			<div id='content_tip'>
				หากเพื่อนๆพบว่าช่วงนี้ทำไมบ้านของเราจึงมีข้าวของ กระจัดกระจายเกะกะไปหมด บรรยากาศซ้ำซากจำเจ ไม่น่าอยู่เอาซะเลย ลองหาเวลาว่างสักนิด เนรมิตบ้านน้อยหลังเดิมให้โปร่งโล่งสบายตา 
			<br/>
			<?php
				echo $this->Html->image('read_more.jpg',array(
					'id' => 'read_more_button',
					'url' => array('action' => 'Event')
				))

			?>
				
			</div>

			<div id='content_tip'>
				หากเพื่อนๆพบว่าช่วงนี้ทำไมบ้านของเราจึงมีข้าวของ กระจัดกระจายเกะกะไปหมด บรรยากาศซ้ำซากจำเจ ไม่น่าอยู่เอาซะเลย ลองหาเวลาว่างสักนิด เนรมิตบ้านน้อยหลังเดิมให้โปร่งโล่งสบายตา
			<br/>
			<?php
				echo $this->Html->image('read_more.jpg',array(
					'id' => 'read_more_button',
					'url' => array('action' => 'Event')
				))

			?>
 
				
			</div>

			<div id='content_tip'>
				หากเพื่อนๆพบว่าช่วงนี้ทำไมบ้านของเราจึงมีข้าวของ กระจัดกระจายเกะกะไปหมด บรรยากาศซ้ำซากจำเจ ไม่น่าอยู่เอาซะเลย ลองหาเวลาว่างสักนิด เนรมิตบ้านน้อยหลังเดิมให้โปร่งโล่งสบายตา 
			<br/>
			<?php
				echo $this->Html->image('read_more.jpg',array(
					'id' => 'read_more_button',
					'url' => array('action' => 'Event')
				))

			?>
				
			</div>

		</div><!-- end #content_body3_field2 -->


 </div><!-- end content_layout -->
</div><!-- home_body -->


