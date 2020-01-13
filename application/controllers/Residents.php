<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Residents extends CI_Controller
{
    function __construct()
	{
		parent::__construct();

		// Load url helper
		$this->load->helper('url');
    }
    
    function index() 
    {
        $data = array(

			'title' => 'Title goes here',

		);

		$this->template->load('base', 'residents/index', $data);
    }
}