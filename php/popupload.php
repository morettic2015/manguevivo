<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Perfil - Lar legal</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css">

        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    </head>
    <body>
        <div data-role="page" data-dialog="true">

            <div data-role="header" data-theme="a">
                <h1>Anexar documentos ao processo</h1>
            </div>
            <?php
            include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';

            //Dao
            $db = new DAO();
            $query = "SELECT description, endereco FROM  `wp_sml_lar_legal` WHERE id =" . $_GET['id'];
            $result = $db->query($query);
            $processo = mysqli_fetch_row($result);

            echo "<center><h1>" . $processo[0] . "</h1><h2>" . $processo[1] . "</h2>";
            ?>

            <div role="main" class="ui-content">
                <iframe src="https://manguevivo.org.br/wp/wp-content/themes/vantage/templates/upload.php?id=<?php echo $_GET['id']; ?>" width="100%" style="border:none;" border="0" height="400px"/>

            </div>
        </div>
    </body>
</html>