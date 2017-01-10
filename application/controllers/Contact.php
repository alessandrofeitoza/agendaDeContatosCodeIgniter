<?php
defined('BASEPATH') or exit("Sem Acesso direto ao Script");

class Contact extends CI_Controller{
  public function index(){
    $this->load->model('Contact_model');

    $contacts = $this->Contact_model->searchAll();

    $page = array(
      'page_view' => "contact/list",
      'content_view' => $contacts,
    );

    $this->load->view("base", $page);
  }

  public function add(){
    $page = array(
      'page_view' => "contact/add",
      'content_view' => "",
    );

    $this->load->view("base", $page);
  }

  public function insert(){
    $new_contact = array(
      'contact_name' => html_escape($this->input->post('name')),
      'contact_email' => html_escape($this->input->post('email')),
      'contact_phone' => html_escape($this->input->post('phone')),
      'contact_mobile' => html_escape($this->input->post('mobile')),
      'contact_createdin' => date('d/m/Y H:i:s'),
    );

    $this->load->model('Contact_model');

    $result = $this->Contact_model->insert($new_contact);

    if($result){
      $this->session->set_flashdata('success', "Novo Contato Inserido");
    }else{
      $this->session->set_flashdata('danger', "Não foi possivel inserir o contato");
    }

    redirect("/");
  }

  public function edit($id){
    $this->load->model('Contact_model');
    $contact = $this->Contact_model->searchById($id);

    $page = array(
      'page_view' => "contact/edit",
      'content_view' => $contact,
    );

    $this->load->view("base", $page);
  }

  public function update(){
    $new_contact = array(
      'contact_name' => html_escape($this->input->post('name')),
      'contact_email' => html_escape($this->input->post('email')),
      'contact_phone' => html_escape($this->input->post('phone')),
      'contact_mobile' => html_escape($this->input->post('mobile')),
    );

    $this->load->model('Contact_model');
    $this->Contact_model->update($new_contact, $this->input->post('id'));

    $this->session->set_flashdata('success', "Contato Atualizado");
    redirect("/");
  }

  public function remove($id){
    $this->load->model('Contact_model');

    $this->Contact_model->remove($id);

    $this->session->set_flashdata('success', "Contato Excluído");
    redirect("/");
  }
}
