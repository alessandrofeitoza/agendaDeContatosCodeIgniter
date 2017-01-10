<?php
if(!$content_view):
  echo '<h3>Não existem resultados!</h3>';
else:
?>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>Celular</th>
      <th>Criado em</th>
      <th>Opções</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($content_view as $contact){
  echo '<tr>';
    echo '<td>',$contact->contact_name,'</td>';
    echo '<td>',$contact->contact_email,'</td>';
    echo '<td>',$contact->contact_phone,'</td>';
    echo '<td>',$contact->contact_mobile,'</td>';
    echo '<td>',$contact->contact_createdin,'</td>';
    echo '<td>';
    echo '<a href="',base_url("contact/edit/$contact->id_contact"),'" class="btn btn-warning">';
      echo '<span class="glyphicon glyphicon-edit"></span>';
    echo '</a> ';
    echo '<a href="',base_url("contact/remove/$contact->id_contact"),'" class="btn btn-danger">';
      echo '<span class="glyphicon glyphicon-trash"></span>';
    echo '</a>';
    echo '</td>';
  echo '</tr>';
  }
  ?>
  </tbody>
</table>
<?php endif; ?>
<a href="<?php echo base_url('contact/add'); ?>">Novo Contato</a>
