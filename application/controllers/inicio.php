<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller 
{  
  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->view('cabecera/header');
    $this->load->view('frontal/menu');
    $this->load->view('frontal/cuerpo');
    $this->load->view('footer/footer');
  }

}
?>