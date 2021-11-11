<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Medico
{

  /**
   * Identificador único da vaga
   * @var integer
   */
  public $id;

  /**
   * Título da vaga
   * @var string
   */
  public $nome;

  /**
   * Descrição da vaga (pode conter html)
   * @var string
   */
  public $crm;

  /**
   * Define se a vaga ativa
   * @var string(s/n)
   */
  public $telefone_fixo;

  /**
   * Data de publicação da vaga
   * @var string
   */
  public $telefone_celular;

  /**
   * Data de publicação da vaga
   * @var string
   */
  public $cep;

  /**
   * Data de publicação da vaga
   * @var string
   */
  public $codespecialidade;

  /**
   * Método responsável por cadastrar uma nova vaga no banco
   * @return boolean
   */
  public function cadastrar()
  {
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERIR A VAGA NO BANCO
    $obDatabase = new Database('medico');
    $this->id = $obDatabase->insert([
      'nome'    => $this->nome,
      'crm' => $this->crm,
      'telefone_fixo'     => $this->telefone_fixo,
      'telefone_celular'      => $this->telefone_celular,
      'cep'                   => $this->cep,
      'codespecialidade'      => $this->codespecialidade
    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar a vaga no banco
   * @return boolean
   */
  public function atualizar()
  {
    return (new Database('medico'))->update('id = ' . $this->id, [
                                                            'nome'    => $this->nome,
                                                            'crm' => $this->crm,
                                                            'telefone_fixo'     => $this->telefone_fixo,
                                                            'telefone_celular'      => $this->telefone_celular,
                                                            'cep'                   => $this->cep,
                                                            'codespecialidade'      => $this->codespecialidade
                                                          ]);
  }

  /**
   * Método responsável por excluir a vaga do banco
   * @return boolean
   */
  public function excluir()
  {
    return (new Database('medico'))->delete('id = ' . $this->id);
  }

  /**
   * Método responsável por obter as vagas do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getMedicos($where = null, $order = null, $limit = null)
  {
    return (new Database('medico'))->select($where, $order, $limit)
      ->fetchAll(PDO::FETCH_CLASS, self::class);
  }

  /**
   * Método responsável por buscar uma vaga com base em seu ID
   * @param  integer $id
   * @return Vaga
   */
  public static function getMedico($id)
  {
    return (new Database('medico'))->select('id = ' . $id)
      ->fetchObject(self::class);
  }
}
