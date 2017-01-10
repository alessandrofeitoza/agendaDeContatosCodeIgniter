<?php
defined('BASEPATH') or die("Sem Acesso direto ao script");

class Rapadura extends CI_Controller{
  public function index(){
    $this->load->view("teste");
  }

  public function novo(){
    $this->load->view("teste");
  }
}
