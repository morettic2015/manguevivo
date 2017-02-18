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
        <script>
            var idLead = null;
            var idLarLegal = null;
            function setProcesso(valvlue) {

                //alert(localStorage.idLead);
                var res = valvlue.split("-");
                idLarLegal = res[1];
                idLead = res[0];

                if (typeof (Storage) !== "undefined") {
                    localStorage.setItem("idLarLegal", idLarLegal);
                    localStorage.setItem("idLead", idLead);
                } else {
                    // Sorry! No Web Storage support..
                }
                //alert(localStorage.idLead);
                //alert(valvlue);
            }
            var checkMarked = null;
            function setLead(valvlue) {
                checkMarked = valvlue;
                idLead = checkMarked.value;
                localStorage.setItem("idLead", idLead);
                localStorage.setItem("idLarLegal", "NULL");
                // alert(idLead);
            }
            function loadUpload() {
                loadUrl("popupload");
            }
            function loadMessage() {
                loadUrl("message");
            }
            function loadHistory() {
                loadUrl("history");
            }
            function loadProcess() {
                if (isNaN(localStorage.idLead)) {
                    alert('Selecione um lead');
                    return;
                }
                this.location.href = "https://manguevivo.org.br/wp/wp-content/themes/vantage/process.php?id=NULL&lead=" + localStorage.idLead;
            }
            function editProcess() {
                if (isNaN(localStorage.idLarLegal)) {
                    alert('Selecione um processo');
                    return;
                }
                this.location.href = "https://manguevivo.org.br/wp/wp-content/themes/vantage/process.php?id=" + localStorage.idLarLegal + "&lead=" + localStorage.idLead;
            }

            function loadUrl(url) {
                if (isNaN(localStorage.idLarLegal) && isNaN(localStorage.idLead)) {
                    alert('Selecione um processo');
                    return;
                }
                this.location.href = "../wp-content/themes/vantage/" + url + ".php?id=" + localStorage.idLarLegal + "&lead=" + localStorage.idLead;
                ;
            }
        </script>
    </head>
    <body>

        <div data-role="page" id="pageone" data-theme="a" >

            <div data-role="main" class="ui-content noSpace" data-fullscreen="true">


                <h1> Leads do Lar Legal </h1>



                <a href="#popupMenu<?php echo $i; ?>" data-rel="popup" data-transition="slideup" style="margin: 60px"class="ui-btn ui-icon-gear ui-btn-icon-left">Gerenciar</a>
                <div data-role="popup" id="popupMenu<?php echo $i; ?>">
                    <ul data-role="listview" data-inset="true">
                        <li data-role="list-divider">Selecione uma ação</li>
                        <li> <a href="../wp-content/themes/vantage/profile.php?id=NULL"  data-transition="slidedown">Novo contato</a></li>
                        <li> <a href="javascript:loadProcess()"  data-transition="slidedown">Novo processo</a></li>
                        <li><a href="javascript:editProcess()"  data-transition="slidedown">Editar processo</a></li>
                        <li><a href="javascript:loadUpload()"  data-transition="slidedown">Anexar documento</a></li>
                        <li><a href="javascript:loadMessage()"  data-transition="slidedown">Enviar mensagem</a></li>
                        <li><a href="javascript:loadHistory()"   data-transition="slidedown">Histórico de ações</a></li>
                    </ul>
                </div>

                <form action="http://manguevivo.org.br/wp/wp-admin/admin.php?" method="GET" data-ajax="false"  >

                    <label>Nome ou email do Lead <input type="text" name="leadName" value="<?php echo $_GET['leadName']; ?>"/></label>
                    <input type="hidden" name="page" value="lar_legal_morettic_com_br"/>
                    <input type="submit" value="Pesquisar"/>

                </form>
                <div class="ui-grid-b ui-responsive" >
                    <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:20px;">Contato</div></div>
                    <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:20px">Opções do contato</div></div>
                    <div class="ui-block-c"><div class="ui-bar ui-bar-a" style="height:20px">Processo(s) do Lar legal</div></div>

                </div><!-- /grid-c -->
                <?php
                include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';
                $where = "";
                $touch = "";
                if (isset($_GET['leadName'])) {
                    $where = "and (sml_name like '%" . $_GET['leadName'] . "%' or sml_email like '%" . $_GET['leadName'] . "%')";
                } else {
                    $touch = " AND intouch =0";
                }
                //Dao
                $db = new DAO();
                $query = "SELECT id, UPPER( sml_name ) AS nm, UPPER( sml_email ) AS mail, sml_avatar_url, sml_origem_lead FROM  `wp_sml` WHERE 1=1 $touch $where ORDER BY sml_name ASC";
                //echo $query;
                $result = $db->query($query);
                $i = 0;
//
                while ($processo = mysqli_fetch_row($result)) {
                    $i++;
                    ?>
                    <div class="ui-grid-b ui-responsive" >
                        <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:100px" align="center">

                                <img src="<?php echo $processo[3]; ?>" style="border-radius: 25px;"><br>
                                <?php echo $processo[2]; ?><br>
                                <small><?php echo $processo[4]; ?></small>
                            </div>
                        </div>
                        <div class="ui-block-b">
                            <div class="ui-bar ui-bar-a" style="height:100px" align="center">
                                <br>

                                <div data-role="controlgroup" data-type="horizontal" data-mini="true">
                                    <label>Selecionar<input type="radio" name="chm" value="<?php echo $processo[0]; ?>" onclick="setLead(this)"/></label>
                                    <a data-ajax="false"  href="../wp-content/themes/vantage/profile.php?id=<?php echo $processo[0]; ?>" class="ui-btn ui-corner-all ui-icon-edit ui-btn-icon-right" data-transition="slidedown">Editar contato</a>
                                    <a data-ajax="false"  href="../wp-content/themes/vantage/prefeitura.php?id=<?php echo $processo[0]; ?>" class="ui-btn ui-corner-all ui-icon-edit ui-btn-icon-right" data-transition="slidedown">Vincular Prefeitura</a>
                                </div>


                            </div>
                        </div>
                        <div class="ui-block-c"><div class="ui-bar ui-bar-a" style="height:100px">
                                <div class="ui-field-contain">
                                    <select name="select-native-1" id="select-native-1" onclick="setProcesso(this.value)">
                                        <?php
                                        $query1 = "SELECT  id, UPPER( description ) , UPPER( endereco )  FROM `wp_sml_lar_legal` where fk_wp_sml = '$processo[0]' group by id";
                                        echo $query1;
                                        $result1 = $db->query($query1);
                                        while ($processo1 = mysqli_fetch_row($result1)) {
                                            echo '<option value="' . $processo[0] . '-' . $processo1[0] . '">' . $processo1[2] . '</option>\n';
                                            //echo "<a href=" . $processo1[1] . '/>' . $processo1[2] . '</a>';
                                        }
                                        ?>
                                    </select>
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