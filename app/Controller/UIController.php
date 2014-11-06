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
		//Detail Page
		$this->layout = 'cozy_detail_layout';
	}

}


?>
