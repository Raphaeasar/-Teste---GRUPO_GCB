<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar medico');

use \App\Entity\Medico;
$obMedico = new Medico;

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['crm'],$_POST['telefone_fixo'],$_POST['telefone_celular'],$_POST['cep'],$_POST['codespecialidade'])){

  $obMedico->nome = $_POST['nome'];
  $obMedico->crm  = $_POST['crm'];
  $obMedico->telefone_fixo = $_POST['telefone_fixo'];
  $obMedico->telefone_celular = $_POST['telefone_celular'];
  $obMedico->cep = $_POST['cep'];
  $obMedico->codespecialidade = $_POST['codespecialidade'];
  $obMedico->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';