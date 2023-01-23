<?php 
use App\Controllers\BeneficiarioController;
#caso escolha uma das opções manda pra pagina especifica.
function getRotas($caminho)
{
    switch($caminho){ 
        case "cadastro_veiculo":
            include ("Views/CadastroVeiculo.php");
        break;
        case "consulta_veiculo":
            include ("./veiculos/mostrar-veiculo.php");
        break;
        case "salvar_veiculo":
            include ("./veiculos/acoes-veiculo.php");
        break;
        case "editar_veiculo":
            include ("./veiculos/editar-veiculo.php");
        break;
        case "cadastro_beneficiario":
            include ("Views/CadastroBeneficiario.php");
        break;
        case "consulta_beneficiario":
            include ("./beneficiarios/mostrar-beneficiario.php");
        break;
        case "salvar_beneficiario":
            BeneficiarioController::save();
        break;
        case "ver_beneficiario":
        include ("./beneficiarios/ver-beneficiario.php");
        break;
        default:
        print "Bem vindos!";
    }
}
 ?>