<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal extends CI_Controller 
{
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
  	$this->load->view('cabecera/header');
  	$this->load->view('personal/personal_view');
  	$this->load->view('footer/footer');
  }
}
?>