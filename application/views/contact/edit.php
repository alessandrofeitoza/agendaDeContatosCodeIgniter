<form action="<?php echo base_url("contact/update"); ?>" method="post">
<legend>Editar Contato</legend>

<label>Nome</label>
<input type="text" name="name" value="<?php echo $content_view->contact_name; ?>" class="form-control">
<br>

<label>Email</label>
<input type="email" name="email" value="<?php echo $content_view->contact_email; ?>" class="form-control">
<br>

<label>Telefone</label>
<input type="text" name="phone" value="<?php echo $content_view->contact_phone; ?>" class="form-control">
<br>

<label>Celular</label>
<input type="text" name="mobile" value="<?php echo $content_view->contact_mobile; ?>" class="form-control">
<br><br>

<input type="hidden" name="id" value="<?php echo $content_view->id_contact; ?>">

<button class="btn btn-primary btn-block">Atualizar</button>
</form>
