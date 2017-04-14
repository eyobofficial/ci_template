<?php defined('BASEPATH') OR exit('No direct script is allowed');


class Auth_Controller extends MY_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->library(array('ion_auth' => 'ion'));
	}




} /********** End Auth_Controller Class ********/