<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3"><?=TITLE?></h2>

  <form method="post">

    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome completo" value="<?=$obMedico->nome?>" required>
    </div>

    <div class="form-group">
      <label>CRM</label>
      <input type="text" class="form-control" name="crm" placeholder="Somente números" value="<?=$obMedico->crm?>" required>
    </div>

    <div class="form-group">
      <label>Telefone Fixo</label>
      <input type="text" class="form-control" name="telefone_fixo" placeholder="Somente números" value="<?=$obMedico->telefone_fixo?>" required>
    </div>

    <div class="form-group">
      <label>Telefone Celular</label>
      <input type="text" class="form-control" name="telefone_celular" placeholder="Somente números" value="<?=$obMedico->telefone_celular?>" required>
    </div>

    <div class="form-group">
      <label>Cep</label>
      <input type="text" class="form-control" name="cep" placeholder="Somente números" value="<?=$obMedico->cep?>" required>
    </div>

    <div class="form-group">
      <label>Código Especialidade</label>
      <textarea class="form-control" placeholder="'Exemplo :1 - Alergologia, 2 - Angiologia, 3 - Buco maxilo, 4 - Cardiologia clínca,
      5 - Cardiologia infantil, 6 - Cirurgia cabeça e pescoço, 7 - Cirurgia cardíaca, 8 - Cirurgia de tórax...'" name="codespecialidade" rows="2" required><?=$obMedico->codespecialidade?></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>

  </form>

</main>