<?php

class MY_Controller extends CI_Controller {

	public $data = array();

	public function __construct(){
		parent::__construct();
		
	}



	public function render($main_view, $template = "main_template_view"){
		$this->data['main_view'] = $main_view;
		$this->load->view($template, $this->data);
	}



	public function render_account($main_view){
		$template = 'account/account_template_view';
		$this->render($main_view, $template);
	}







} /*** End MY_Controller ****/