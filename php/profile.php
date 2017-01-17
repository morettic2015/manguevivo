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
        <div data-role="page" data-dialog="true">

            <div data-role="header" data-theme="a">
                <h1>Meus dados</h1> 
            </div>
            <?php
            include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';

            //Dao
            $db = new DAO();
            $query = "SELECT id, UPPER( sml_name ) AS nm, UPPER( sml_email ) AS mail, sml_avatar_url FROM  `wp_sml` WHERE intouch =0 ORDER BY sml_name ASC";

            $result = $db->query($query);
            $i = 0;
            ?>
            <div role="main" class="ui-content">
                <img src="<?php echo "https://graph.facebook.com/$id/picture"; ?>" style="border-color: #468847;border: 1px solid;border-radius: 25px;"/>
                <form style="max-width:100%;min-width:150px" method="get">

                    <div class="title"><h2>Mantenha seus dados de contato sempre atualizados!</h2></div>
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
                        <input class="large" type="text" name="fone" id="fone" placeholder="whatsapp ou telefone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="<?php echo $rperfil[6]; ?>"/>
                    </div>
                    <div class="element-input">
                        <input class="large" type="text" name="rg" placeholder="Rg" value="<?php echo $rperfil[7]; ?>"/>
                    </div>
                    <div class="element-input">
                        <input class="large" type="text" name="cpf" placeholder="Cpf ou Cnpj" onkeypress='mascaraMutuario(this, cpfCnpj)' onblur='clearTimeout()' value="<?php echo $rperfil[8]; ?>"/>
                    </div>
                    <br>
                    <div class="submit"><input type="submit" value="Salvar"/></div>
                </form>
            </div>
        </div>
    </body>
</html>