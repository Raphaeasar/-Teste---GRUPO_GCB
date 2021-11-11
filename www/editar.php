<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar médico');

use \App\Entity\Medico;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A VAGA
$obMedico = Medico::getMedico($_GET['id']);

//VALIDAÇÃO DA VAGA
if(!$obMedico instanceof Medico){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['crm'],$_POST['telefone_fixo'],$_POST['telefone_celular'],$_POST['cep'],$_POST['codespecialidade'])){

  $obMedico->nome = $_POST['nome'];
  $obMedico->crm = $_POST['crm'];
  $obMedico->telefone_fixo = $_POST['telefone_fixo'];
  $obMedico->telefone_celular = $_POST['telefone_celular'];
  $obMedico->cep = $_POST['cep'];
  $obMedico->codespecialidade = $_POST['codespecialidade'];
  $obMedico->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';