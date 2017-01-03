<?php defined('BASEPATH') OR ('No direct script allowed');

/**
 * Base controller to extend future controllers
 * 
 * @package   
 * @copyright
 * @link
 * @author        Eyob Tariku <eyobtariku@gmail.com>
 */

class MY_Controller extends CI_Controller {

	/**
	 * Property to pass all data
	 */
	public $data = array();


	/**
	 * Constructor Method
	 */
	public function __construct(){
		parent::__construct();

	}


	/**
	 * Method to render page from template_view
	 */
	public function render($main_vew = NULL){
		if( ! is_null($main_view) && file_exists(APPPATH . "views/" . $main_view . ".php")){

			$template_path = 'templates/template_view';
			$this->data['main_view'] = $main_view;

			$this->load->view($template_path, $this->data);
		}else{
			show_404();
		}
	}
}