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
        <script>
            function enviar() {
                if (confirm('Deseja enviar a mensagem?')) {
                    return true;
                }
                return false;
            }
        </script>
    </head>
    <body>
        <div data-role="page" data-dialog="false">

            <div data-role="header" data-theme="b">
                <h1>Enviar mensagem</h1>
            </div>
            <div class="element-input">
                <a href="http://manguevivo.org.br/wp/wp-admin/admin.php?page=lar_legal_morettic_com_br" data-ajax="false"  class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-back ui-btn-icon-left ui-btn-a">Voltar</a>
            </div>
            <?php
            $lead = $_GET['lead'];
            $process = $_GET['id'];
            include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';
            if (isset($_GET['action'])) {

                $db = new DAO();

                $query = "INSERT INTO `manguevi_portal_2016`.`wp_sml_log` (
                `id_sml_lar_doc`,
                `dt_registro`,
                `author`,
                `acao`,
                `id_processo`,
                `id_contato`
                )
                VALUES (
                NULL,
                CURRENT_TIMESTAMP, '1071267682998806', 'Mangue vivo[Nova Mensagem]:" . $_GET['message'] . "', '" . $process . "',  $lead )";
                @$result = $db->query($query);

                // echo $query;

                if ($_GET['id'] != "NULL") {
                    $query = "SELECT (SELECT sml_email FROM wp_sml WHERE id = `fk_wp_sml` ) FROM `wp_sml_lar_legal` WHERE id = " . $process;
                } else {
                    $query = "SELECT sml_email FROM wp_sml WHERE id = " . $lead;
                }


                $result = $db->query($query);
                $processo = mysqli_fetch_row($result);
                // echo $query;
                $db->sendEmail("Mangue vivo[Nova Mensagem]", $_GET['message'] . "\n http://www.manguevivo.org.br", $processo[0]);

                echo "<center><h1>Mensagem enviada com sucesso para  $processo[0]</h1></center>";


                $query1 = "UPDATE  `wp_sml` SET intouch =  '1' WHERE id =$lead OR id = ( SELECT fk_wp_sml FROM wp_sml_lar_legal WHERE id =$process )";
                @$result = $db->query($query1);
            }

            // echo "<center><h1>" . $processo[0] . "</h1><h2>" . $processo[1] . "</h2>";
            ?>
            <form action="http://manguevivo.org.br/wp/wp-content/themes/vantage/message.php?lead=<?php echo $lead; ?>" method="get" onsubmit="return  enviar();
                    void(0);">
                <div role="main" class="ui-content">
                    <label>Mensagem<textarea name="message" rows="20"></textarea></label>
                </div>
                <input type="submit" value="Enviar mensagem"/>
                <input type="hidden" value="<?php echo $process; ?>" name="action"/>
                <input type="hidden" value="<?php echo $process; ?>" name="id"/>
                <input type="hidden" value="<?php echo $lead; ?>" name="lead"/>
            </form>

        </div>
    </body>
</html>