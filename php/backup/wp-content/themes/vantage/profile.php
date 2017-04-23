<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Perfil - Lar legal</title>
        <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css">

        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    </head>
    <body>
        <div data-role="page" data-dialog="false">

            <div data-role="header" data-theme="a">
                <h1>Meus dados</h1>
            </div>
            <?php
            include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';

            //Dao
            $db = new DAO();
            $id = $_GET['id'];

            $rg = $_GET['rg'];
            $cpf = $_GET['cpf'];
            $obs = $_GET['obs'];
            $fonte = $_GET['fonte'];
            $fone1 = $_GET['fone1'];
            $fone = $_GET['fone'];
            $name = $_GET['username'];
            $email = $_GET['email'];
            if (isset($_GET['pg'])) {
                if ($id != "NULL") {

                    //var_dump($_GET);
                    $query = "UPDATE wp_sml set sml_name =  '$name',sml_avatar_url =  'https://graph.facebook.com/$id/picture', `fonte`='$fonte',`fone_fixo`='$fone1',`obs`='$obs',sml_fone='$fone', rg='$rg', c_pf_pj='$cpf' where id = $id";
                    echo '<h1>Dados atualizados com sucesso</h1>';

                    $result = $db->query($query);
                } else {
                    $query = "INSERT INTO `manguevi_portal_2016`.`wp_sml` (`id`, `sml_name`, `sml_email`, `sml_sexo`,`sml_fone`, `rg`, `c_pf_pj`, `intouch`, `fonte`, `fone_fixo`, `obs`)"
                            . " VALUES (NULL, '$name', '$email', 'M',  '$fone', '$rg', '$cpf', '0', '$fonte', '$fone1', '$obs')";
                    $result = $db->query($query);

                    echo '<h1>Dados inseridos com sucesso</h1>';


                    $query = "SELECT id FROM  `wp_sml` WHERE sml_email =  '$email'";
                    //echo $query;
                    $result = $db->query($query);
                    $rperfil = mysqli_fetch_row($result);
                    $id = $rperfil[0];
                }
            }


            $query = "SELECT `id`,`sml_name`,`sml_email`,`sml_avatar_url`,`sml_fone`,`rg`,`c_pf_pj` ,`fonte`,`obs`,`fone_fixo` FROM `wp_sml` where `id` = $id";
            //echo $query;
            $result = $db->query($query);
            $rperfil = mysqli_fetch_row($result);
            $i = 0;
            ?>
            <div role="main" class="ui-content">
                <div class="element-input">
                    <a href="http://manguevivo.org.br/wp/wp-admin/admin.php?page=lar_legal_morettic_com_br" data-ajax="false"  class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-back ui-btn-icon-left ui-btn-a">Voltar</a>
                </div>
                <div class="element-input">
                    <img src="<?php echo "https://graph.facebook.com/$id/picture"; ?>" style="border-color: #468847;border: 1px solid;border-radius: 25px;"/>
                </div>
                <form name = "perfil" action="profile.php" data-ajax="false" style="max-width:100%;min-width:150px" method="get">

                    <div class="title"><h2>Mantenha seus dados de contato sempre atualizados!</h2></div>
                    <label>Como soube?
                        <select name="fonte">
                            <option value='R'>Radio</option>
                            <option value='F'>Folheto</option>
                            <option value='T'>TV</option>
                            <option value='I'>Internet</option>
                        </select>
                        <script>
                            document.perfil.fonte.value = '<?php echo $rperfil[7]; ?>';
                        </script>
                    </label>
                    <div class="element-input">
                        <input class="large" type="text" name="username" placeholder="Nome" value="<?php echo $rperfil[1]; ?>"/>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="hidden" name="pg" value="main"/>
                        <input type="hidden" name="acao" value="update_profile"/>
                    </div>
                    <div class="element-email">
                        <input class="large" type="email" name="email" placeholder="Email" value="<?php echo $rperfil[2]; ?>"/>
                    </div>
                    <div class="element-input">
                        <input class="large" type="text" name="fone" id="fone" placeholder="whatsapp ou telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="<?php echo $rperfil[4]; ?>"/>
                    </div>
                    <div class="element-input">
                        <input class="large" type="text" name="fone1" id="fone" placeholder="telefone fixo" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="<?php echo $rperfil[9]; ?>"/>
                    </div>
                    <div class="element-input">
                        <input class="large" type="text" name="rg" placeholder="Rg" value="<?php echo $rperfil[5]; ?>"/>
                    </div>
                    <div class="element-input">
                        <input class="large" type="text" name="cpf" placeholder="Cpf ou Cnpj" onkeypress='mascaraMutuario(this, cpfCnpj)' onblur='clearTimeout()' value="<?php echo $rperfil[6]; ?>"/>
                    </div>
                    <div class="element-input">
                        <input class="large" type="text" name="obs" placeholder="Observaçao" value="<?php echo $rperfil[8]; ?>"/>
                    </div>
                    <br>
                    <div class="submit"><input type="submit" value="Salvar"/></div>

                </form>
            </div>
        </div>
    </body>
</html>
</div><!-- /grid-c -->
<?php
$db->close();
?>