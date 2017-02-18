<?php include PATH . 'inc/rules.php'; ?>
<script>
<?php include PATH . 'inc/blocked.js'; ?>
</script>
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Perfil</a></li>
        <li><a id="tabPrefeitura1" href="#tabs-23">Prefeitura</a></li>
        <li><a id="tabHistory" href="#tabs-42">Minha História</a></li>
        <li><a id="tabDocs" href="#tabs-22">Documentos</a></li>
        <li><a id="tabAvisos" href="#tabs-12">Avisos</a></li>
        <li><a href="#tabs-52">Ajuda</a></li>
    </ul>
    <div id="tabs-23">
        <?php
        $query1 = "SELECT * FROM `wp_sml_prefeitura` WHERE fk_wp_sml = $id";
        $result1 = $db->query($query1);
        //echo $query1;

        $prefeitura = mysqli_fetch_row($result1);

        //var_dump($prefeitura);
        ?>
        <h1><b>Prefeitura</b></h1>
        <br>
        <h2>Dados de seu município</h2>
        Esta é a tela de cadastro do Lar Legal Prefeitura. Aqui você pode contar um pouco das características de seu município:
        <br>
        <br>
        <form name='prefeitura' style="max-width:100%;min-width:150px" method="get">
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
                    <input class="large" type="checkbox" name="siconv" placeholder="Possui cadastro no siconv?"/>Possui cadastro no siconv?
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
                document.prefeitura.siconv.checked = <?php echo $prefeitura[4] == "on" ? "true" : "false"; ?>;
            </script>
        </form>
    </div>
    <div id="tabs-1">
        <h1><b>Meus dados</b></h1>
        <br>
        <p>
            <img src="<?php echo "https://graph.facebook.com/$id/picture"; ?>" style="border-color: #468847;border: 1px solid;border-radius: 25px;"/>
        <form name='perfilUser' style="max-width:100%;min-width:150px" method="get">

            <div class="title"><h2>Mantenha seus dados de contato sempre atualizados!</h2></div>
            <div class="element-input">
                <label>
                    <input type="checkbox" name="ehPrefeitura"/> Represento uma prefeitura
                </label>
            </div>
            <div class="element-input">
                <input class="large" type="text" name="username" placeholder="Nome" value="<?php echo $rperfil[1]; ?>"/>
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <input type="hidden" name="pg" value="main"/>
                <input type="hidden" name="acao" value="update_profile"/>
            </div>
            <div class="element-email">
                <label>Como soube?
                    <select name="fonte">
                        <option value='R'>Radio</option>
                        <option value='F'>Folheto</option>
                        <option value='T'>TV</option>
                        <option value='I'>Internet</option>
                    </select>
                </label>
                <script>
                    document.perfilUser.fonte.value = "<?php echo $rperfil[10]; ?>";
                    document.perfilUser.ehPrefeitura.checked = <?php echo $rperfil[5] == "PREFEITURA" ? 'true' : 'false'; ?>;
                    if (document.perfilUser.ehPrefeitura.checked == true) {
                        $("#tabHistory").hide();
                        $("#tabDocs").hide();
                        $("#tabAvisos").hide();
                        $("#tabPrefeitura1").show();
                    } else {
                        $("#tabPrefeitura1").hide();
                        $("#tabHistory").show();
                        $("#tabDocs").show();
                        $("#tabAvisos").show();
                    }
                </script>
            </div>
            <div class="element-email">
                <input class="large" type="obs" name="obs" placeholder="Observação" value="<?php echo $rperfil[12]; ?>"/>
            </div>
            <div class="element-email">
                <input class="large" type="email" name="email" placeholder="Email" value="<?php echo $rperfil[2]; ?>"/>
            </div>
            <div class="element-input">
                <input class="large" type="text" name="fone1" id="fone1" placeholder="Telefone fixo" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="<?php echo $rperfil[11]; ?>"/>
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
    <div id="tabs-52">
        <h1><b>Ajuda</b></h1>
        <br>
        <h2>Ajuda Lar Legal</h2>
        Esta é a tela de cadastro do Lar Legal que você acessa com sua conta. Aqui você pode contar sua história com informações sobre seu imóvel para que possamos ver como ajudá-lo. Abaixo está descrito como utilizar cada aba:
        <br>
        <br>
        <p>
            <strong>Aba 'Meus Dados': </strong>Formulário contendo seus dados. Fique a vontade para preencher os dados que faltam. Todos os dados serão necessários assim que você decidir seguir em frente com o processo.
        </p> <p>
            <strong>Aba 'Prefeitura': </strong>Para as prefeituras informarem seus dados e características de seu zoneamento
        </p><p>
            <strong>Aba 'Minha História': </strong>Sinta-se a vontade para descrever o imóvel e falar sobre sua história. Você pode informar o endereço do imóvel no campo de texto para localizar no mapa. Essa informação nos auxiliará a ter um entendimento melhor do seu caso.
        </p><p>
            <strong>Aba 'Documentos':</strong> Aqui você seleciona a história do seu caso e anexa documentos relacionados que serão fundamentais para a regularização do seu imóvel. Os documentos que forem solicitados podem ser incluídos nessa tela por meio do botão 'Anexar arquivos...'. Para finalizar clique em Enviar. Se precisar apagar algum arquivo você pode utilizar o botão 'Remover'.
        </p><p>
            <strong>Aba 'Avisos': </strong>Visualize todas as atividades relacionadas com seus processos e sua conta.
        </p><p>
            <strong>Aba 'Habite-se': </strong>Para os moradores de Florianópolis que tem um imóvel com escritura pública mas nao regularizou a construçao.
        </p><p><center>
            <iframe frameborder="0" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/HRxEfX3p_gE" style="height: 315px; width: 560px; margin-left: auto; margin-right: auto;" id="fitvid118473"></iframe>
        </center>
        </p>
    </div>
    <div id="tabs-12">
        <h1><b>Avisos</b></h1>
        <br>
        Acompanhe as atividades realizadas em seu(s) processo(s)!
        <br>
        <ol id="selectable">
            <?php
            $query = "SELECT `dt_registro`,`author`,`acao` FROM `wp_sml_log` WHERE id_processo in (select id from wp_sml_lar_legal where fk_wp_sml = $id) or author = $id order by dt_registro desc";
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
    <div id="tabs-22">
        Anexe os seus arquivos e envie para nossa nuvem! Estaremos avaliando seu processo o mais breve possível!
        <label for="processo" style="font-size:14px "><br>Seus processos:
            <select name="processo" style="width: 30%;margin: 15px;height: 20px;" onchange="loadAnexos(this)">
                <option value="">Selecione</option>
                <?php
                $query = "SELECT `id`,upper(description) ,`endereco`,dt_registro,lat,lon FROM `wp_sml_lar_legal` WHERE fk_wp_sml = $id";

                echo $query;
                $result = $db->query($query);
                while ($processo = mysqli_fetch_row($result)) {

                    // var_dump($processo);
                    echo "<option value='$processo[0]'>" . substr($processo[2], 0, 100) . "</option>\n";
                }
                ?>
            </select>

        </label>
        <iframe id='anexos' style="width: 100%;height: 600px;border: 0px;background: none"></iframe>
    </div>

    <div id="tabs-42">
        <div data-role="page" data-theme="b" id="demo-page" class="my-page" data-url="demo-page">
            <div data-role="header">
                <h1><b>Regularização Fundiária</b></h1>
                <br>

                <form name="processo" style="max-width:100%;min-width:150px" method="get">
                    <div class="title">
                        <h2>Qual seu interesse?</h2>
                        <small>**Habite-se apenas para Florianópolis</small>
                    </div>
                    <div class="element-input">
                        <label><input type="radio" name="habitese" value="h" onclick="showHideHabit(true)"/>Habite-se</label>
                        <label><input type="radio" name="habitese" value="l" checked="true" onclick="showHideHabit(false)"/>Escritura pública</label>
                    </div>
                    <br>
                    <div class="element-input">
                        <input type="checkbox" name="posse"/><label id="txtPosseTit">Tem escritura de posse?</label>
                    </div>
                    <div id="frmHabitese" class="element-input">
                        <div class="element-input">
                            <label><input type="checkbox" name="calcada"/>Imóvel tem matrícula no registro de imóveis?</label>
                        </div>
                        <div class="element-input" title="Matrícula no registro de imóveis / escritura de posse">
                            <label><input type="checkbox" name="esc_publica"/>O Imóvel tem escritura publica?</label>
                        </div>
                        <div class="element-input">
                            <label><input type="checkbox" name="ant_2014"/>A Construção é anterior a 2016</label>
                        </div>
                        <div class="element-input">
                            <label>
                                Área construida mt²
                                <select name="menor_120" >
                                    <option value=""></option>
                                    <option value="1">até 120 m²</option>
                                    <option value="2">acima de 120 m²</option>
                                </select>
                            </label>
                        </div>
                        <div class="element-input">
                            <label><input type="checkbox" name="projeto" onclick="showHideProjects(this)">Existe Projeto?</label>
                            <br>
                            <div id="projetos_chk" style="border: 1px;border-color: #34495e;visibility: hidden;display: none;">
                                <label><input type="checkbox" name="p_hid" value="h"/>Hidráulico</label>
                                <label><input type="checkbox" name="p_arq" value="a"/>Arquitetonico</label>
                                <label><input type="checkbox" name="p_est" value="e"/>Estrutural</label>
                            </div>
                        </div>
                    </div>

                    <div id="frmLarLegal" class="element-input">
                        <div class="element-input">
                            <label><input type="checkbox" name="cv"/>Contrato de compra e venda?</label>
                        </div>
                        <div class="element-input">
                            <label><input type="checkbox" name="iptu"/>Paga IPTU?</label>
                        </div>
                        <div class="element-input" title="Área de preservação permante ou área de preservação limitada">
                            <label><input type="checkbox" name="app"/>Área APP ou APL?</label>
                        </div>
                        <div class="element-input" >
                            <label><input  type="checkbox" name="asfalto"/>Rua asfaltada ou calçada?</label>
                        </div>

                        <div class="element-input">
                            <label><input type="checkbox" name="lixo"/>Serviço de Luz, Água ou Coleta de lixo?</label>
                        </div>
                        <div class="element-input">
                            <label>Tempo de posse (anos)<input type="number" name="tempo" title="Informe o tempo de posse. Número de anos"/></label>
                        </div>

                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="hidden" name="pg" value="main"/>
                        <input type="hidden" name="idLarLegal" value="NULL"/>
                        <input type="hidden" name="acao" value="save_lar_legal"/>
                    </div>

                    <div class="element-input">
                        <label><input type="checkbox" name="iptu_prop"/>O IPTU esta no nome do proprietário?</label>
                    </div>
                    <br>
                    <div  class="element-input">
                        <label id="titDescInner">Conte mais sobre o seu imóvel</label><br>
                        <textarea class="large" type="text" name="descricao" placeholder="Descricao" cols="40" rows="5" title="Ex: Terreno de herança em nome do avô no bairro siriu garopaba"></textarea>
                    </div>
                    <br>
                    Informe o endereço de sua propriedade.
                    <br>
                    <input id="pac-input" name="endereco" class="controls" type="text"
                           placeholder="Digite o endereço de sua propriedade">

                    <div id="map"></div>
                    <br>
                    <div class="submit">
                        <input type="button" value="Salvar" onclick="saveProcesso()"/>
                        <input type="reset" value="Cancelar" onclick="document.processo.reset()"/>
                        <input type="button" value="Novo" onclick="novo()"/>
                    </div>
                    <script>
                        showHideHabit(false);
                    </script>
                </form>
            </div><!-- /header -->
            <hr/>
            <div role="main" class="ui-content">
                <h1><b>Meus processos</b></h1>
                <br>
                Clique no processo para editar
                <ol id="selectable">
                    <?php
                    $query = "SELECT `id`,upper(description),`endereco`,dt_registro,lat,lon,IFNULL(tempo_posse,0),IFNULL(calcada,'false'),IFNULL(lixo,'false'),IFNULL(asfalto,'false'),IFNULL(app,'false'),IFNULL(iptu,'false'),IFNULL(cv,'false'),IFNULL(posse,'false'),IFNULL(esc_publica,'false'),habitese,IFNULL(ant_2014,'false'),IFNULL(menor_120,'false'),IFNULL(projeto,'false'),IFNULL(iptu_prop,'false'),p_hid,p_arq,p_est FROM `wp_sml_lar_legal` WHERE fk_wp_sml = $id";

//echo $query;
                    $result = $db->query($query);
                    while ($processo = mysqli_fetch_row($result)) {
                        ?>
                        <li class="ui-widget-content">
                            <!--

                            function setMapaProperties(desc, idLarLegal, plat, plon, addrs, tempo, posse, cv, iptu, app, asfalto, calcada, lixo, esc_publica, habitese, ant_2014, menor_120, projeto, iptu_prop) {

                            -->
                            <a href="javascript:setMapaProperties('<?php echo $processo[1]; ?>','<?php echo $processo[0]; ?>', '<?php echo $processo[4]; ?>', '<?php echo $processo[5]; ?>', '<?php echo $processo[2]; ?>','<?php echo $processo[6]; ?>',<?php echo $processo[13]; ?>,<?php echo $processo[12]; ?>,<?php echo $processo[11]; ?>,<?php echo $processo[10]; ?>,<?php echo $processo[9]; ?>,<?php echo $processo[7]; ?>,<?php echo $processo[8]; ?>,'<?php echo $processo[14]; ?>','<?php echo $processo[15]; ?>',<?php echo $processo[16]; ?>,<?php echo $processo[17]; ?>,<?php echo $processo[18]; ?>,<?php echo $processo[19]; ?>,'<?php echo $processo[20]; ?>','<?php echo $processo[21]; ?>','<?php echo $processo[2]; ?>')">
                                <img src="http://manguevivo.org.br/wp/wp-content/themes/vantage/templates/assets/images/edit.png" title="Editar" alt="editar" width="20" height="20"/>
                            </a>
                            <b>Localização:</b><?php echo substr($processo[2], 0, 200); ?>...
                        </li>
                        <?php
                    }
                    $db->close();
                    ?>
                </ol>
            </div><!-- /content -->
        </div>
    </div>
</div>