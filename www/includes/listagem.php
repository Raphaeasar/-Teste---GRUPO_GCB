<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($medicos as $medico){
    $resultados .= '<tr>
                      <td>'.$medico->id.'</td>
                      <td>'.$medico->nome.'</td>
                      <td>'.$medico->crm.'</td>
                      <td>'.$medico->telefone_fixo.'</td>
                      <td>'.$medico->telefone_celular.'</td>
                      <td>'.$medico->cep.'</td>
                      <td>'.$medico->codespecialidade.'</td>
                      <td>
                        <a href="editar.php?id='.$medico->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$medico->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma vaga encontrada
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Novo médico</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CRM</th>
            <th>Telefone Fixo</th>
            <th>Telefone Celular</th>
            <th>Cep</th>
            <th>Código Especialidade</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>