<?php
  if($alert_msg = $this->session->flashdata("danger")){
    echo '<div class="alert alert-danger">';
      echo '<strong>',$alert_msg,'</strong>';
    echo '</div>';
  }

  if($alert_msg = $this->session->flashdata("success")){
    echo '<div class="alert alert-success">';
      echo '<strong>',$alert_msg,'</strong>';
    echo '</div>';
  }
?>
