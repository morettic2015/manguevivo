<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @Componente de documentos do lar legal
 * @Morettic.com.br
 * 2016 all right reserved!
 *
 *  */
include PATH . 'src/DAO.php';

$db = new DAO();

// Quote and escape form submitted values
$name = $db->quote($_GET['username']);
$email = $db->quote($_GET['email']);
$id = $_GET['id'];
$acao = $_GET['acao'];
$fone = $_GET['fone'];
/**
  @se vier do facebook cria um perfil e atualiza o avatar
 *  */
if ($acao == "face") {
    $query = "INSERT INTO wp_sml( id, sml_name, sml_email, `sml_origem_lead` ,sml_avatar_url)  "
            . "VALUES ($id,  $name, $email,  'FACEBOOK' ,'https://graph.facebook.com/$id/picture') "
            . "ON DUPLICATE KEY UPDATE sml_name =  $name,sml_avatar_url =  'https://graph.facebook.com/$id/picture'";
    $result = $db->query($query);
    $db->sendEmail("Novo contato [Mangue vivo]", "Dados do usuário $name salvos no projeto lar legal \\n http://www.manguevivo.org.br", $email);
    //echo $query;
    /**
      @ se for a ação de atualiza o perfil
     *
     *  */
} else if ($acao == "prefeitura") {
    $nmPrefeitura = $_GET['nmPrefeitura'];
    $donoArea = $_GET['donoArea'];
    $intSocial = isset($_GET['intSocial']) ? '1' : '0';
    $oscipPar = isset($_GET['oscipPar']) ? '1' : '0';
    $siconv = $_GET['siconv'];
    $totalImoveis = $_GET['totalImoveis'] == "" ? "0" : $_GET['totalImoveis'];
    $secHabit = isset($_GET['secHabit']) ? '1' : '0';
    $id = $_GET['id'];
    $query = "INSERT INTO `wp_sml_prefeitura`("
            . "`fk_wp_sml`, "
            . "`wp_sml_dono`, "
            . "`wp_sml_interesse`, "
            . "`wp_sml_p_oscip`, "
            . "`wp_sml_sincov`, "
            . "`wp_sml_total`, "
            . "`wp_sml_sec_hab`, "
            . "`wp_sml_prefeitura`) VALUES ($id,'$donoArea','$intSocial','$oscipPar','$siconv','$totalImoveis','$secHabit','$nmPrefeitura')"
            . "ON DUPLICATE KEY UPDATE "
            . "wp_sml_dono =  '$donoArea',"
            . "wp_sml_interesse =  '$intSocial',"
            . "wp_sml_p_oscip =  '$oscipPar',"
            . "wp_sml_sincov =  '$siconv',"
            . "wp_sml_total =  '$totalImoveis',"
            . "wp_sml_sec_hab =  '$secHabit',"
            . "wp_sml_prefeitura =  '$nmPrefeitura'";
    $result = $db->query($query);
    $queryLog = "INSERT INTO  `manguevi_portal_2016`.`wp_sml_log` (`author` , `acao` ) VALUES ( $id,  'DADOS DA PREFEITURA ATUALIZADOS' )";
    $result = $db->query($queryLog);

    //echo $query;

    echo "<h1>Dados do município atualizados com sucesso</h1>";
} else if ($acao == "update_profile") {
    $rg = $_GET['rg'];
    $cpf = $_GET['cpf'] == "" ? NULL : $_GET['cpf'];
    $obs = $_GET['obs'];
    $fonte = $_GET['fonte'];
    $fone1 = $_GET['fone1'];
    $fone = $_GET['fone'];
    $ehPrefeitura = empty($_GET['ehPrefeitura']) ? 'LAR_LEGAL' : 'PREFEITURA';
    //var_dump($_GET);
    $query = "UPDATE wp_sml set sml_name =  $name,sml_avatar_url =  'https://graph.facebook.com/$id/picture', `sml_origem_lead` =  '$ehPrefeitura', `fonte`='$fonte',`fone_fixo`='$fone1',`obs`='$obs',sml_fone='$fone', rg='$rg',";

    if ($cpf == NULL) {
        $query.= " c_pf_pj=NULL where id = $id";
    } else {
        $query.= "c_pf_pj='$cpf' where id = $id";
    }


    //echo $query;
    //die;
    $result = $db->query($query);

    //echo $query;
    $db->sendEmail("Contato atualizado [Mangue vivo]", "Dados do usuário $name salvos no projeto lar legal \\n http://www.manguevivo.org.br", $_GET['email']);

    $queryLog = "INSERT INTO  `manguevi_portal_2016`.`wp_sml_log` (`author` , `acao` ) VALUES ( $id,  'ATUALIZOU PERFIL' )";
    $result = $db->query($queryLog);

    echo "<h1>Perfil atualizado</h1>";
} else if ($acao == "processo") {
    /**

     *      */
    // var_dump($_GET);
    //die();

    $idLarLegal = $_GET['idLarLegal'];
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
    $endereco = $_GET['endereco'];
    $desc = $_GET['desc'];
    $idLarLegal = $_GET['idLarLegal'];
    $posse = $_GET['posse'];
    $cv = $_GET['cv'];
    $iptu = $_GET['iptu'];
    $app = $_GET['app'];
    $asfalto = $_GET['asfalto'];
    $lixo = $_GET['lixo'];
    $calcada = $_GET['calcada'];
    $tempo_posse = $_GET['tempo'];
    $esc_publica = $_GET['esc_publica'];
    $habitese = $_GET['habitese'];
    $ant_2014 = $_GET['ant_2014'];
    $menor_120 = empty($_GET['menor_120']) ? 'NULL' : $_GET['menor_120'];
    $projeto = $_GET['projeto'];
    $iptu_prop = $_GET['iptu_prop'];
    $p_hid = $_GET['p_hid'] == "true" ? '1' : '0';
    $p_arq = $_GET['p_arq'] == "true" ? '1' : '0';
    $p_est = $_GET['p_est'] == "true" ? '1' : '0';


    $query = "INSERT INTO `manguevi_portal_2016`.`wp_sml_lar_legal` (`id`, `fk_wp_sml`, `description`, `endereco`, `lat`, `lon`, `posse`, `cv`, "
            . "`iptu`, `app`, `asfalto`,  `lixo`, `calcada`, `tempo_posse`, `esc_publica`, `habitese`, `ant_2014`, `menor_120`, `projeto`, `iptu_prop`,`p_hid`,`p_arq`,`p_est`) "
            . "VALUES ($idLarLegal, '$id', '$desc', '$endereco', '$lat', '$lon', '$posse', '$cv', '$iptu', '$app', '$asfalto', '$lixo', '$calcada', '$tempo_posse'"
            . ", $esc_publica, '$habitese',$ant_2014, $menor_120, $projeto, $iptu_prop,'$p_hid','$p_arq','$p_est') "
            . "ON DUPLICATE KEY UPDATE description = '$desc', lat = '$lat',lon='$lon',endereco='$endereco',"
            . " `posse`='$posse', `cv`='$cv', `iptu`='$iptu', `app`='$app', `asfalto`='$asfalto',  `lixo`='$lixo', `calcada`='$calcada', `tempo_posse`='$tempo_posse',"
            . " `esc_publica`=$esc_publica, `habitese`='$habitese', `ant_2014`=$ant_2014, `menor_120`=$menor_120,  `projeto`=$projeto, `iptu_prop`=$iptu_prop , "
            . " `p_hid`=$p_hid , `p_arq`=$p_arq , `p_est`=$p_est";
    //echo $query;
    $result = $db->query($query);

    $queryLog = "INSERT INTO  `manguevi_portal_2016`.`wp_sml_log` (`author` , `acao` ) VALUES ( $id,  'PROCESSO ATUALIZADO ($desc) <br> $endereco  <br> Coordenadas  ($lat / $lon)' )";
    $result = $db->query($queryLog);

    $db->sendEmail("Nova história [Mangue vivo]", "Nova história cadastrada $desc. Endereço: $endereco", "contatos@manguevivo.org.br");

    echo "<h1>Processo salvo</h1>";
}


$queryProfile = "SELECT * FROM  `wp_sml` WHERE id =$id";
$result = $db->query($queryProfile);


$rperfil = mysqli_fetch_row($result);
//var_dump($rperfil);
?>