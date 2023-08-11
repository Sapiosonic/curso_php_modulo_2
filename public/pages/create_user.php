<h2>Cadastrar usuário</h2>

<?= get('message');?>

<form action="/pages/forms/create_user.php" method="POST" role="form">
  
<legend></legend>

  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="sobrenome">Sobrenome</label>
    <input type="text" class="form-control" name="sobrenome" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Input field">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" class="form-control" name="password" placeholder="Input field">
  </div>
    
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

