<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <style>
            div[data-role="content"] {
                position: absolute;
                top:0;
                left:0;
                bottom:0;
                right:0;
            }

            div.ui-grid-b {
                height: 75%;
            }

            .ui-block-a, .ui-block-b, .ui-block-c {
                height: 20%;
            }
        </style>
    </head>
    <body>

        <div data-role="page" id="pageone"  >

            <div data-role="main" class="ui-content noSpace" data-fullscreen="true">


                <h1> Leads do Lar Legal </h1>

                <div data-role="controlgroup" data-type="horizontal">
                    <a href="#" class="ui-btn ui-corner-all ui-icon-user ui-btn-icon-left">Novo contato</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-carat-r ui-btn-icon-left">Novo processo</a>
                    <a href="#" class="ui-btn ui-corner-all ui-icon-clock ui-btn-icon-left">Ultimas ações</a>
                </div>


                <div class="ui-grid-c ui-responsive" >
                    <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:20px;">Nome</div></div>
                    <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:20px">Email</div></div>
                    <div class="ui-block-c"><div class="ui-bar ui-bar-a" style="height:20px">Processo(s)</div></div>
                    <div class="ui-block-d"><div class="ui-bar ui-bar-a" style="height:20px">Ações</div></div>
                </div><!-- /grid-c -->
                <?php
                include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';

                //Dao
                $db = new DAO();
                $query = "SELECT id, UPPER( sml_name ) AS nm, UPPER( sml_email ) AS mail, sml_avatar_url FROM  `wp_sml` WHERE intouch =0 ORDER BY sml_name ASC";

                $result = $db->query($query);
                $i=0;
//      
                while ($processo = mysqli_fetch_row($result)) {
                    $i++;
                    ?>
                    <div class="ui-grid-c ui-responsive">
                        <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:110px" align="center">
                                <img src="<?php echo $processo[3]; ?>" style="border-radius: 25px;">
                                <br><a href="../wp-content/themes/vantage/profile.php?id=<?php echo $processo[0]; ?>" class="ui-btn ui-corner-all ui-icon-edit ui-btn-icon-right" data-transition="slidedown"><?php echo $processo[1]; ?></a>
                            </div>
                        </div>
                        <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:110px"><?php echo $processo[2]; ?></div></div>
                        <div class="ui-block-c"><div class="ui-bar ui-bar-a" style="height:110px">
                                <div class="ui-field-contain">
                                    <select name="select-native-1" id="select-native-1">
                                        <?php
                                        $query1 = "SELECT  id, UPPER( description ) , UPPER( endereco )  FROM `wp_sml_lar_legal` where fk_wp_sml = '$processo[0]' group by id";
                                        echo $query1;
                                        $result1 = $db->query($query1);
                                        while ($processo1 = mysqli_fetch_row($result1)) {
                                            echo '<option value="' . $processo1[0] . '">' . $processo1[2] . '</option>\n';
                                            //echo "<a href=" . $processo1[1] . '/>' . $processo1[2] . '</a>';
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="ui-block-d">
                            <div class="ui-bar ui-bar-a" style="height:110px">
                                <a href="#popupMenu<?php echo $i; ?>" data-rel="popup" data-transition="slideup" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-gear ui-btn-icon-left ui-btn-a">Actions...</a>
                                <div data-role="popup" id="popupMenu<?php echo $i; ?>" data-theme="b">
                                    <ul data-role="listview" data-inset="true" style="width:100%;">
                                        <li data-role="list-divider">Selecione uma ação</li>
                                        <li><a href="#" >Editar processo</a></li>
                                        <li><a href="#">Enviar mensagem</a></li>
                                        <li><a href="#"  data-transition="slidedown">Anexar documento</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- /grid-c -->
                    <?php
                }
                $db->close();
                ?>
            </div>

    </body>
</html> 