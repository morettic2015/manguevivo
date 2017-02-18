<!DOCTYPE html>
<?php
$id = $_GET['id'];

$acao = $_GET['acao'];
include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';
$db = new DAO();



if ($acao == "prefeitura") {
    $nmPrefeitura = $_GET['nmPrefeitura'];
    $donoArea = $_GET['donoArea'];
    $intSocial = isset($_GET['intSocial']) ? '1' : '0';
    $oscipPar = isset($_GET['oscipPar']) ? '1' : '0';
    $siconv = isset($_GET['siconv']) ? '1' : '0';
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

    echo $query;

    $query = "UPDATE  `wp_sml` SET `sml_origem_lead` =  'PREFEITURA' WHERE id =$id";

    //echo $query;

    $result = $db->query($query);

    $queryLog = "INSERT INTO  `manguevi_portal_2016`.`wp_sml_log` (`author` , `acao` ) VALUES ( $id,  'DADOS DA PREFEITURA ATUALIZADOS' )";
    $result = $db->query($queryLog);



    echo "<script>alert('Dados do município atualizados com sucesso');</script>";
}


$query1 = "SELECT * FROM `wp_sml_prefeitura` WHERE fk_wp_sml = $id";
$result1 = $db->query($query1);
$prefeitura = mysqli_fetch_row($result1);
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    </head>
    <body>

        <div data-role="page" id="pageone" data-theme="a" >

            <div data-role="main" class="ui-content noSpace" data-fullscreen="true">
                <div class="element-input">
                    <a href="http://manguevivo.org.br/wp/wp-admin/admin.php?page=lar_legal_morettic_com_br" data-ajax="false"  class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-back ui-btn-icon-left ui-btn-a">Voltar</a>
                </div>

                <h1> Prefeitura </h1>
                <h2>Dados de seu município</h2>
                Esta é a tela de cadastro do Lar Legal Prefeitura. Aqui você pode contar um pouco das características de seu município:
                <br>
                <form name='prefeitura' style="max-width:100%;min-width:150px" method="get" data-ajax="false" >
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <input type="hidden" name="pg" value="main"/>
                    <input type="hidden" name="acao" value="prefeitura"/>
                    <div class="element-input">
                        <label> Prefeitura de:
                            <input class="large" type="text" name="nmPrefeitura" placeholder="Nome da prefeitura" value="<?php echo $prefeitura[7]; ?>"/>
                        </label>
                    </div>
                    <div class="element-email">
                        <label>As áreas a serem regularizadas pertencem:
                            <select name="donoArea" title="As áreas a serem regularizadas pertencem a: união, estado, município ou particular">
                                <option>Selecione</option>
                                <option value='U'>União</option>
                                <option value='E'>Estado</option>
                                <option value='M'>Município</option>
                                <option value='P'>Particular</option>
                            </select>
                        </label>
                    </div>
                    <div class="element-input">
                        <label>
                            <input type="checkbox" name="intSocial"/> O Município tem área de interesse social
                        </label>
                    </div>
                    <div class="element-input">
                        <label>
                            <input type="checkbox" name="oscipPar"/> O Município já realiza parceria com OSCIPS
                        </label>
                    </div>
                    <div class="element-input">
                        <label>
                            <input class="large" type="checkbox" name="siconv" placeholder="Possui cadastro no siconv?"/>Possui cadastro no siconv
                        </label>
                    </div>
                    <div class="element-input">
                        <label>Total de Imóveis a serem regularizados:
                            <select name="totalImoveis">
                                <option value='1000'>até 1000</option>
                                <option value='9999'>mais de 1000</option>
                            </select>
                        </label>

                    </div>
                    <div class="element-input">
                        <label>
                            <input type="checkbox" name="secHabit"/>O Município tem secretaria de habitação
                        </label>
                    </div>
                    <div class="submit"><input type="submit" value="Salvar"/></div>
                    <script>
                        document.prefeitura.donoArea.value = '<?php echo $prefeitura[1]; ?>';
                        document.prefeitura.totalImoveis.value = '<?php echo $prefeitura[5]; ?>';
                        document.prefeitura.secHabit.checked = <?php echo $prefeitura[6] == "1" ? "true" : "false"; ?>;
                        document.prefeitura.oscipPar.checked = <?php echo $prefeitura[3] == "1" ? "true" : "false"; ?>;
                        document.prefeitura.intSocial.checked = <?php echo $prefeitura[2] == "1" ? "true" : "false"; ?>;
                        document.prefeitura.siconv.checked = <?php echo $prefeitura[4] == "1" ? "true" : "false"; ?>;
                    </script>
                </form>

                <?php
                $db->close();
                ?>
            </div>

    </body>
</html>