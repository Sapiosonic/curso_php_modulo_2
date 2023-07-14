<h2>Contato</h2>

<form action="/pages/forms/contato.php" method="post" role="form">
  <legend>Entre em contato</legend>

  <div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control" placeholder="Digite seu nome">
  </div>

  <div class="form-group">
    <label for="">E-mail</label>
    <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail">
  </div>

  <div class="form-group">
    <label for="">Assunto</label>
    <input type="text" name="subject" class="form-control" placeholder="Digite o assunto">
  </div>

  <div class="form-group">
    <label for="">Mensagem</label>
    <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Digite aqui sua mensagem"></textarea>
  </div>

  <button type="submit" class="btn btn-warning">Submit</button>

</form>