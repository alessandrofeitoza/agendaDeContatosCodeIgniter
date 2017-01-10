<?php
  defined('BASEPATH') or exit("Sem acesso direto ao Script");

  class Contact_model extends CI_Model{
    public function insert($new_contact){
      //$this->load->database();
      foreach($new_contact as $k=>$v){
					$new_contact[$k] = $this->db->escape_str($v);
			}

      $this->db->insert("tb_contact", $new_contact);
      return $this->db->insert_id();
    }

    public function searchAll(){
      // $this->load->database();
      $this->db->from("tb_contact");
      return $this->db->get()->result();
    }

    public function searchById($id){
      // $this->load->database();
      if(!$id){
        return false;
      }

      $this->db->where('id_contact', $id);
      $this->db->from("tb_contact");
      $this->db->limit(1);

      return $this->db->get()->row();
    }
    
    public function update($new_data, $id){
      // $this->load->database();
      if(!$id){
        return false;
      }

      foreach($new_data as $k=>$v){
					$new_data[$k] = $this->db->escape_str($v);
			}

      $this->db->where('id_contact', $id);
      return $this->db->update('tb_contact', $new_data);
    }

    public function remove($id){
      // $this->load->database();
      if(!$id){
        return false;
      }

      return $this->db->delete('tb_contact', array('id_contact'=>$id));
    }
  }
