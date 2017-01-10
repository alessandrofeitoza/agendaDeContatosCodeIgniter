<form action="<?php echo base_url("contact/insert"); ?>" method="post">
  <legend>Novo Contato</legend>

  <label>Nome</label>
  <input type="text" name="name" class="form-control" placeholder="Digite o Nome"><br>

  <label>Email</label>
  <input type="email" name="email" class="form-control" placeholder="Digite o Email"><br>

  <label>Telefone</label>
  <input type="text" name="phone" class="form-control" placeholder="Digite o Telefone"><br>

  <label>Celular</label>
  <input type="text" name="mobile" class="form-control" placeholder="Digite o Celular"><br><br>

  <button class="btn btn-primary btn-block">Enviar</button>
</form>
