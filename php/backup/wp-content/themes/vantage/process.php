<!doctype html>
<?php
include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';

$message = "";
$id = $_GET['id'];
$db = new DAO();
$lead = $_GET['lead'];
if (isset($_GET['acao'])) {

    $habitese = $_GET['habitese'];
    $posse = (isset($_GET['posse'])) ? "1" : "0";
    $cv = (isset($_GET['cv'])) ? "1" : "0";
    $iptu = (isset($_GET['iptu'])) ? "1" : "0";
    $app = (isset($_GET['app'])) ? "1" : "0";
    $asfalto = (isset($_GET['asfalto'])) ? "1" : "0";
    $iptu_prop = (isset($_GET['iptu_prop'])) ? "1" : "0";
    $lixo = (isset($_GET['lixo'])) ? "1" : "0";
    $description = $_GET['descricao'];
    $endereco = $_GET['endereco'];
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
    $tempo = $_GET['tempo'];
    $calcada = (isset($_GET['calcada'])) ? "1" : "0";
    $tempo_posse = (isset($_GET['tempo'])) ? $_GET['tempo'] : "0";
    $esc_publica = (isset($_GET['esc_publica'])) ? "1" : "0";
    $ant_2014 = (isset($_GET['ant_2014'])) ? "1" : "0";
    $menor_120 = (isset($_GET['menor_120'])) ? $_GET['menor_120'] : "-1";
    $projeto = (isset($_GET['projeto'])) ? "1" : "0";
    $p_hid = (isset($_GET['p_hid'])) ? "1" : "0";
    $p_arq = (isset($_GET['p_arq'])) ? "1" : "0";
    $p_est = (isset($_GET['p_est'])) ? "1" : "0";
    // $iptu_prop

    if ($habitese == "l") {
        if ($id == "NULL") {
            $query = "INSERT INTO `wp_sml_lar_legal`("
                    . " `fk_wp_sml`, `description`, "
                    . "`endereco`, `lat`, `lon`, "
                    . "`dt_registro`, `posse`, `cv`, "
                    . "`iptu`, `app`, `asfalto`, "
                    . "`lixo`, `calcada`, "
                    . "`tempo_posse`, "
                    . "`esc_publica`, "
                    . "`habitese`, `ant_2014`, `menor_120`, `projeto`, `iptu_prop`, `p_hid`, `p_arq`, `p_est`) "
                    . "VALUES ($lead,'$description','$endereco','$lat','$lon',now(),'$posse','$cv','$iptu','$app','$asfalto',"
                    . "'$lixo','$calcada','$tempo_posse','$esc_publica','$habitese','$ant_2014','$menor_120','$projeto','$iptu_prop','$p_hid','$p_arq','$p_est')";

            echo $query;
            $result = $db->query($query);

            $query = "SELECT MAX( id ) FROM wp_sml_lar_legal WHERE fk_wp_sml =" . $lead;
            $result = $db->query($query);
            $processo = mysqli_fetch_row($result);
            $id = $processo[0];


            $message = "<h1>Processo cadastrado com sucesso</h1>";
        } else {
            $query = "UPDATE  `manguevi_portal_2016`.`wp_sml_lar_legal` SET
                        `description` =  '" . $description . "',
                        `endereco` =  '" . $endereco . "',
                        `lat` =  '" . $lat . "',
                        `lon` =  '" . $lon . "',
                        `posse` =  '$posse',
                        `cv` =  '$cv',
                        `app` =  '$app',
                        `asfalto` =  '$asfalto',
                        `iptu_prop` =  '$iptu_prop',
                        `lixo` =  '$lixo',
                        `iptu` =  '$iptu',
                        `tempo_posse` =  '" . $tempo . "' WHERE  `wp_sml_lar_legal`.`id` =$id";
            echo $query;
            $result = $db->query($query);
            $message = "<h1>Processo atualizado com sucesso</h1>";
        }
    } else {
        $on1 = false;
        if ($id == "NULL") {
            $query = "INSERT INTO `manguevi_portal_2016`.`wp_sml_lar_legal` (`fk_wp_sml`, `description`, `endereco`, `lat`, `lon`, `posse`, `cv`, "
                    . "`iptu`, `app`, `asfalto`,  `lixo`, `calcada`, `tempo_posse`, `esc_publica`, `habitese`, `ant_2014`, `menor_120`, `projeto`, `iptu_prop`,`p_hid`,`p_arq`,`p_est`) "
                    . "VALUES (' $lead ', '$description', '$endereco', '$lat', '$lon', '$posse', '$cv', '$iptu', '$app', '$asfalto', '$lixo', '$calcada', '$tempo_posse'"
                    . ", $esc_publica, '$habitese',$ant_2014, $menor_120, $projeto, $iptu_prop,'$p_hid','$p_arq','$p_est') ";
            $on1 = true;
        } else {
            $query = "update `manguevi_portal_2016`.`wp_sml_lar_legal` set  description = '$desc', lat = '$lat',lon='$lon',endereco='$endereco',"
                    . " `posse`='$posse', `cv`='$cv', `iptu`='$iptu', `app`='$app', `asfalto`='$asfalto',  `lixo`='$lixo', `calcada`='$calcada', `tempo_posse`='$tempo_posse',"
                    . " `esc_publica`=$esc_publica, `habitese`='$habitese', `ant_2014`=$ant_2014, `menor_120`=$menor_120,  `projeto`=$projeto, `iptu_prop`=$iptu_prop , "
                    . " `p_hid`=$p_hid , `p_arq`=$p_arq , `p_est`=$p_est where id=$id";
        }
        echo $query;
        $result = $db->query($query);

        if ($on1) {
            $query = "SELECT MAX( id ) FROM wp_sml_lar_legal WHERE fk_wp_sml =" . $lead;
            $result = $db->query($query);
            $processo = mysqli_fetch_row($result);
            $id = $processo[0];
        }
    }
}

if ($id != "NULL") {

    $query = "SELECT * FROM  `wp_sml_lar_legal` WHERE id =$id";
    //echo $query;
    $result = $db->query($query);
    $processo = mysqli_fetch_row($result);
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Perfil - Lar legal</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css">
        <style>
            #map {
                height: 400px;
                margin: 0;
                padding: 0;
                width: 480px;
            }
            .controls {
                margin-top: 10px;
                border: 1px solid transparent;
                border-radius: 2px 0 0 2px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                height: 32px;
                outline: none;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            }

            #pac-input {
                background-color: #fff;
                font-family: Roboto;
                font-size: 15px;
                font-weight: 300;
                margin-left: 12px;
                padding: 0 11px 0 13px;
                text-overflow: ellipsis;
                width: 300px;
            }

            #pac-input:focus {
                border-color: #4d90fe;
            }

            .pac-container {
                font-family: Roboto;
            }

            #type-selector {
                color: #fff;
                background-color: #4d90fe;
                padding: 5px 11px 0px 11px;
            }

            #type-selector label {
                font-family: Roboto;
                font-size: 13px;
                font-weight: 300;
            }

        </style>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCkJEjT73RmsOw1Ldy3S9RbWg_-PDRh8zE&libraries=places&sensor=false"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script>

            function setLatLon() {
                //alert(document.processo.lat.value);

                document.processo.lat.value = localizacao.lat;
                document.processo.lon.value = localizacao.lon;

                //alert(document.processo.lat.value);
                // alert(document.processo.lon.value);

            }
            var options = {
                enableHighAccuracy: true,
                timeout: 5000,
                maximumAge: 0
            };
            function success(pos) {
                initMap(pos);
            }

            var localizacao = null;
            var map = null;
            function initMap(pos) {
                var crd = pos.coords;
                map = new google.maps.Map(document.getElementById('map'), {
<?php
if ($processo[4] != "") {
    echo "center: {lat: " . $processo[4] . ", lng: " . $processo[5] . "},";
} else {
    echo "center: {lat: crd.latitude, lng: crd.longitude},";
}
?>

                    zoom: 13
                });
                var input = /** @type {!HTMLInputElement} */(
                        document.getElementById('pac-input'));

                var types = document.getElementById('type-selector');
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

                var autocomplete = new google.maps.places.Autocomplete(input);
                autocomplete.bindTo('bounds', map);

                var infowindow = new google.maps.InfoWindow();
                var marker = new google.maps.Marker({
                    map: map,
                    anchorPoint: new google.maps.Point(0, -29)
                });

                autocomplete.addListener('place_changed', function() {
                    infowindow.close();
                    marker.setVisible(false);
                    place = autocomplete.getPlace();


                    if (!place.geometry) {
                        window.alert("Autocomplete's returned place contains no geometry");
                        return;
                    }
                    // If the place has a geometry, then present it on a map.
                    if (place.geometry.viewport) {
                        map.fitBounds(place.geometry.viewport);
                    } else {
                        map.setCenter(place.geometry.location);
                        map.setZoom(17);  // Why 17? Because it looks good.
                    }
                    marker.setIcon(/** @type {google.maps.Icon} */({
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(35, 35)
                    }));

                    //alert(place.geometry.location.lon());
                    //alert(place.geometry.location.lat());
                    //alert(place.geometry.location.lng());
                    document.processo.lat.value = place.geometry.location.lat();
                    document.processo.lon.value = place.geometry.location.lng();

                    localizacao = {lat: place.geometry.location.lat(), lon: place.geometry.location.lng()}
                    marker.setPosition(place.geometry.location);
                    marker.setVisible(true);

                    var address = '';
                    if (place.address_components) {
                        address = [
                            (place.address_components[0] && place.address_components[0].short_name || ''),
                            (place.address_components[1] && place.address_components[1].short_name || ''),
                            (place.address_components[2] && place.address_components[2].short_name || '')
                        ].join(' ');
                    }

                    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                    infowindow.open(map, marker);

                    map.setZoom(14);

                });

                // Sets a listener on a radio button to change the filter type on Places
                // Autocomplete.
                function setupClickListener(id, types) {
                    var radioButton = document.getElementById(id);
                    radioButton.addEventListener('click', function() {
                        autocomplete.setTypes(types);
                    });
                }

                setupClickListener('changetype-all', []);
                setupClickListener('changetype-address', ['address']);
                setupClickListener('changetype-establishment', ['establishment']);
                setupClickListener('changetype-geocode', ['geocode']);
            }
            var txtPosseTit;
            window.onload = function() {
                navigator.geolocation.getCurrentPosition(success, success, options);
                txtPosseTit = document.getElementById('txtPosseTit');
            }

            function showHideHabit(v) {
                // var element = document.getElementById("titDescInner");
                if (v) {
                    // element.innerHTML = 'Conte sua história para que possamos regularizar seu imóvel';
                    $("#frmLarLegal").hide();
                    $("#frmHabitese").show();
                    document.processo.habitese.value = 'h';
                    // txtPosseTit.innerHTML = 'Escritura de posse ou contrato de compra e venda?';
                } else {
                    // element.innerHTML = 'Conte sua história para que possamos regularizar seu terreno';
                    $("#frmHabitese").hide();
                    $("#frmLarLegal").show();
                    document.processo.habitese.value = 'i';
                    // txtPosseTit.innerHTML = 'Escritura de posse?';
                }

            }

            function showHideProjects(el) {
                /*var fSHow = document.getElementById('projetos_chk');
                 if (el.checked == true) {
                 fSHow.style.display = 'block';
                 fSHow.style.visibility = 'visible';
                 $("#projetos_chk").show();

                 } else {
                 fSHow.style.display = 'none';
                 fSHow.style.visibility = 'hidden';
                 $("#projetos_chk").hide();
                 }*/
            }
        </script>
    </head>
    <body>
        <div data-role="page" data-dialog="false">

            <div data-role="header" data-theme="a">
                <h1>Escritura Pública</h1>
            </div>
            <h1><b>Regularização Fundiária</b></h1>
            <br>
            <?php echo "<h4>$message</h4>"; ?>
            <div class="element-input">
                <a href="http://manguevivo.org.br/wp/wp-admin/admin.php?page=lar_legal_morettic_com_br" data-ajax="false"  class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-back ui-btn-icon-left ui-btn-a">Voltar</a>
            </div>
            <form data-ajax="false"  name="processo" style="max-width:100%;min-width:150px" method="get" action="https://manguevivo.org.br/wp/wp-content/themes/vantage/process.php" onsubmit="setLatLon()">

                <div class="title"><h2>Conte a sua história para que possamos fazer o seu lar legal!</h2></div>
                <div class="element-input">
                    <label><input type="radio" name="habitese" value="h" onclick="showHideHabit(true)"/>Habite-se</label>
                    <label><input type="radio" name="habitese" value="l" checked="true" onclick="showHideHabit(false)"/>Escritura pública</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                Informe detalhadamente as características da situação atual de sua propriedade.<br><br>
                <div class="element-input">
                    <input type="checkbox" name="posse"/><br><label id="txtPosseTit">Tem escritura de posse?</label>
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
                            <select name="menor_120" id="menor_120">
                                <option value=""></option>
                                <option <?php echo $processo[18] == "1" ? "selected" : ""; ?> value="1">até 120 m²</option>
                                <option <?php echo $processo[18] == "2" ? "selected" : ""; ?> value="2">acima de 120 m²</option>
                            </select>
                        </label>
                    </div>
                    <div class="element-input">
                        <label><input type="checkbox" name="projeto" onclick="showHideProjects(this)">Existe Projeto?</label>
                        <br>
                        <div id="projetos_chk">
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
                        <label>Tempo de posse (anos)<input type="number" name="tempo" title="Informe o tempo de posse. Número de anos" value="<?php echo empty($processo[14]) ? "0" : $processo[14]; ?>"/></label>
                    </div>
                    <input type="hidden" name="lead" value="<?php echo $lead; ?>"/>
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <input type="hidden" name="pg" value="main"/>
                    <input type="hidden" name="idLarLegal" value="NULL"/>
                    <input type="hidden" name="acao" value="save_lar_legal"/>
                </div>

                <div class="element-input">
                    <label><input type="checkbox" name="iptu_prop"/>O IPTU esta no nome do proprietário?</label>
                </div>

                <script>
                    showHideHabit(<?php echo $processo[16] == "h" ? "true" : "false"; ?>);
                    document.processo.posse.checked = <?php echo empty($processo[7]) ? "false" : "true"; ?>;
                    document.processo.cv.checked = <?php echo empty($processo[8]) ? "false" : "true"; ?>;
                    document.processo.iptu.checked = <?php echo empty($processo[9]) ? "false" : "true"; ?>;
                    document.processo.app.checked = <?php echo empty($processo[10]) ? "false" : "true"; ?>;
                    document.processo.asfalto.checked = <?php echo empty($processo[11]) ? "false" : "true"; ?>;
                    document.processo.iptu_prop.checked = <?php echo empty($processo[20]) ? "false" : "true"; ?>;
                    document.processo.lixo.checked = <?php echo empty($processo[12]) ? "false" : "true"; ?>;

                    document.processo.projeto.checked = <?php echo empty($processo[18]) ? "false" : "true"; ?>;
                    showHideProjects(document.processo.projeto.checked);

                    document.processo.p_hid.checked = <?php echo empty($processo[21]) ? "false" : "true"; ?>;
                    document.processo.p_arq.checked = <?php echo empty($processo[22]) ? "false" : "true"; ?>;
                    document.processo.p_est.checked = <?php echo empty($processo[23]) ? "false" : "true"; ?>;

                    document.processo.calcada.checked = <?php echo empty($processo[13]) ? "false" : "true"; ?>;
                    document.processo.esc_publica.checked = <?php echo empty($processo[15]) ? "false" : "true"; ?>;
                    document.processo.ant_2014.checked = <?php echo empty($processo[17]) ? "false" : "true"; ?>;


                </script>
                <br>
                <label id="titDescInner">Conte mais sobre o seu imóvel</label><br>
                <textarea class="large" type="text" name="descricao" placeholder="Descricao" cols="50" rows="5"><?php echo $processo[2]; ?></textarea>
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <input type="hidden" name="pg" value="main"/>
                <input type="hidden" name="lead" value="<?php echo $lead; ?>"/>
                <input type="hidden" name="idLarLegal" value="NULL"/>
                <input type="hidden" name="lat" value="<?php echo $processo[4]; ?>"/>
                <input type="hidden" name="lon" value="<?php echo $processo[5]; ?>"/>
                <input type="hidden" name="acao" value="save_lar_legal"/>


                <br>
                Informe o endereço de sua propriedade.
                <br>
                <input id="pac-input" name="endereco" class="controls" type="text"
                       placeholder="Digite o endereço de sua propriedade" value="<?php echo $processo[3]; ?>">

                <div id="map"></div>
                <br>
                <div class="submit">
                    <input type="submit" value="Salvar"/>
                </div>

            </form>
    </body>
</html>
<?php
$db->close();
?>

