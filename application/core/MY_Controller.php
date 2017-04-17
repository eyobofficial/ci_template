<?php

class MY_Controller extends CI_Controller {

	public $data = array();

	public function __construct(){
		parent::__construct();

		/**
		 * Load website name from custom config
		 */
		$this->data['website_name'] = $this->config->item('website_name');

		/**
		 * Load website author name from custom config
		 */
		$this->data['website_author'] = $this->config->item('website_author');


		/**
		 * Load website author email from custom config
		 */
		$this->data['author_email'] = $this->config->item('author_email');


		/**
		 * Load website description from custom config
		 */
		$this->data['website_description'] = $this->config->item('website_description');
	}



	public function render($template = "default_template_view"){
		$this->load->view($template, $this->data);
	}



	public function render_account($main_view){
		$template = 'account/account_template_view';
		$this->render($main_view, $template);
	}







} /*** End MY_Controller ****/