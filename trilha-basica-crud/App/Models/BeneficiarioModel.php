<?php
namespace App\Model;
use App\DAO\BeneficiarioDAO;

class BeneficiarioModel 
{
    

    public $id, $nome, $documento, $logradouro, $numero, $bairro, $cidade, $uf, $tel_fixo, $celular, $situacao ;
    public $rows;
    
    public function save()
    {
        
        $dao = new BeneficiarioDAO();
     
        $dao->insert($this);

         /* else {

            $dao->update($this);
            
        } */

    }

    public function getAllRows()
    {
        
        $dao = new BeneficiarioDAO();
        $this->rows = $dao->select();
        
    }

    public function getById(int $id)
    {
    
        $dao = new BeneficiarioDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new BeneficiarioDAO;

    }

    public function delete(int $id)
    {
        
        $dao = new BeneficiarioDAO();
        $dao->delete($id);

    }

}