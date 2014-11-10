<?php
//this is controller
class UIController extends AppController {
	//set layout
	var $layout = 'master';
	//set helper
	public $helpers = array('Html','Form','Js','Text');
	
	public function index(){
		//this is notting
	}

	public function Home(){
		//this is home page
		$this->layout = 'cozy_home_layout';
	}
	public function AboutUs(){
		//About Us Page
	}
	public function Contact(){
		//Contact Page
	}
	public function Event(){
		//Event Page
	}
	public function Project(){
		//show product page
		$this->layout = 'cozy_home_layout';
	}
	public function Search(){
		//Search Product page
	}
	public function Detail(){
		//Project Detail Page
		
		$this->layout = 'cozy_detail_layout';
	}

	public function DetailDesc($project_name = null){
		$project_list = array('COZY @ CHOKCHAI 4 SOI 84 ','COZY @ SATRIWITTHAYA 2 - 29 ','COZY @ SATRIWITTHAYA 2 – 10 ','COZY @ SATRIWITTHAYA 2 – 29 แยก 4 ','COZY @ NAKNIWAT 37 ','COZY @ NAKNIWAT 24 ','COZY @ CHOKCHAI 4 SOI 78 ','COZY @ SANGKOMSONGKROR 16
');
		if($project_name==0)
		{
			$this->set('project_name',$project_list[0]);
		}
		else if($project_name==1){
			$this->set('project_name',$project_list[1]);
		}
		else if($project_name==2){
			$this->set('project_name',$project_list[2]);
		}
		else if($project_name==3){
			$this->set('project_name',$project_list[3]);
		}
		else if($project_name==4){
			$this->set('project_name',$project_list[4]);
		}
		else if($project_name==5){
			$this->set('project_name',$project_list[5]);
		}
		else if($project_name==6){
			$this->set('project_name',$project_list[6]);
		}
		else if($project_name==7){
			$this->set('project_name',$project_list[7]);
		}



		$this->layout = 'cozy_detail_desc_layout';
	}

	public function DetailImage(){
		$this->layout = 'cozy_detail_image_layout';
	}
	public function EventDetail(){
	
	}


}


?>
