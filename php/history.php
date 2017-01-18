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
                <h1>Enviar mensagem</h1> 
            </div>
            <div class="element-input">
                <a href="http://manguevivo.org.br/wp/wp-admin/admin.php?page=lar_legal_morettic_com_br" data-ajax="false"  class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-back ui-btn-icon-left ui-btn-a">Voltar</a>
            </div>
            <ol id="selectable">
                <?php
                include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';
                $db = new DAO();
                $query = "SELECT `dt_registro`,`author`,`acao` FROM `wp_sml_log` WHERE id_processo = " . $_GET['id'] . " order by dt_registro desc";
                
                //echo $query;
                $result = $db->query($query);
                while ($processo = mysqli_fetch_row($result)) {
                    ?>
                    <li class="ui-widget-content" style="height: 100px;margin: 5px">
                        <a href="#" ><img src="http://manguevivo.org.br/wp/wp-content/themes/vantage/templates/assets/images/info-xxl.png" width="20" height="20"/></a>
                        <?php echo $processo[0]; ?><br><?php echo $processo[2]; ?>
                    </li>
                <?php } ?>
            </ol>
        </div>
    </body>
</html>