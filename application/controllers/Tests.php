<?php defined('BASEPATH') OR exit('No direct script is allowed');


class Tests extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['main_view'] = 'tests/';
	}


	public function index()
	{
		$this->data['main_view'] .= 'index_view';
		$this->render();
	}

}/********* End Tests Controller Class ********/