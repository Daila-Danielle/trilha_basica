<?php

namespace App\Controllers;

use App\Models\BeneficiarioModel;


class BeneficiarioController 
{
    /**
     * Método para exibir a lista de pessoas
     * Inclui o arquivo com o modelo da pessoa e carrega a view de listagem
     */
    public static function index()
    {
       
        $model = new BeneficiarioModel();
        $model->getAllRows();
        
        header("Location: ?pagina=consulta_beneficiario");
    }

    /**
     * Método para exibir o formulário de cadastro de pessoas
     * Inclui o arquivo da view de formulário
     */
    public static function form()
    {
        
        $model = new BeneficiarioModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        
       
       // include 'Views/modules/Pessoa/FormPessoa.php';
    }

    /**
     * Método para salvar os dados enviados pelo formulário
     * Inclui o arquivo com o modelo da pessoa, cria uma nova instância do modelo
     * preenche os atributos com os dados do $_POST e chama o método de salvar
     * redireciona o usuário para a página de listagem
     */
    public static function save()
    {
        
        include('Models/BeneficiarioModel.php');
        
        $model = new BeneficiarioModel();
        $model->id         = (int) $_POST['id'];
        $model->nome       = $_POST['nome'];
        $model->documento  = $_POST["documento"];
        $model->logradouro = $_POST["logradouro"];
        $model->numero     = $_POST["numero"];
        $model->bairro     = $_POST["bairro"];
        $model->cidade     = $_POST["cidade"];
        $model->uf         = $_POST["uf"];
        $model->tel_fixo   = $_POST["telFixo"];
        $model->celular    = $_POST["telCel"];
        $model->situacao   = $_POST["situacao"];
        
        $model ->save();
        
        header("Location: ?pagina=consulta_beneficiario");
        
    }

/*     public static function delete()
    {
        
        $model = new BeneficiarioModel();
        $model->delete( (int) $_GET['id']);
        header("Location: /treinamento/Daila/php/MVC_estudo/pessoa");

    } */

}
