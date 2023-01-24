<?php

namespace App\DAO;

Use App\Models\BeneficiarioModel;

var_dump('cheguei no DAO');

class BeneficiarioDAO extends DAO
{
    private $conexao;


    public function __construct()
    {

        parent::__construct();

    }

    public function insert(BeneficiarioModel $model)
    {
        
        $sql = "INSERT INTO beneficiarios (nome, documento, logradouro, numero, bairro, cidade, uf, telefone, celular, situacao)
        VALUES ('{$model->nome}','{$model->documento}','{$model->logradouro}','{$model->numero}','{$model->bairro}','{$model->cidade}','{$model->uf}','{$model->tel_fixo}','{$model->celular}','{$model->situacao}')";
        $res  = $this->conexao->query($sql);

    }

/*     public function update(BeneficiarioModel $model)
    {
        $sql = "UPDATE  tbl_pessoa SET nome = '{$model->nome}', cpf = '{$model->cpf}', data_nascimento = $model->data_nascimento
        WHERE id = $model->id";
        $res  = $this->conexao->query($sql);

        return $res;
       
    } */

    public function select()
    {
        $sql = "SELECT * FROM beneficiarios";
        $res = $this->conexao->query($sql);
        $results = array();
        
        while ($row = $res->fetch_object()) {
            $results[] = $row;
        }
        
        return $results;
    }

    public function selectById(int $id)
    {
        
        $sql = "SELECT * FROM tbl_pessoa WHERE id = $id";
        $res = $this->conexao->query($sql);
        
        return $res->fetch_object("App\Model\PessoaModel");
    }
    

    public function delete(int $id)
    {
        $sql = "DELETE FROM tbl_pessoa WHERE id  = $id";
        $res  = $this->conexao->query($sql);
    }


}