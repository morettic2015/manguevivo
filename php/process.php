<!doctype html>
<?php
include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';

$id = $_GET['id'];
$db = new DAO();
if (isset($_GET['acao'])) {


    $posse = (isset($_GET['posse'])) ? "true" : "false";
    $cv = (isset($_GET['cv'])) ? "true" : "false";
    $iptu = (isset($_GET['iptu'])) ? "true" : "false";
    $app = (isset($_GET['app'])) ? "true" : "false";
    $asfalto = (isset($_GET['asfalto'])) ? "true" : "false";
    $calcada = (isset($_GET['calcada'])) ? "true" : "false";
    $lixo = (isset($_GET['lixo'])) ? "true" : "false";

    if ($id == "NULL") {
        $query = "INSERT INTO  `manguevi_portal_2016`.`wp_sml_lar_legal` (
                    `id` ,
                    `fk_wp_sml` ,
                    `description` ,
                    `endereco` ,
                    `lat` ,
                    `lon` ,
                    `dt_registro` ,
                    `posse` ,
                    `cv` ,
                    `iptu` ,
                    `app` ,
                    `asfalto` ,
                    `lixo` ,
                    `calcada` ,
                    `tempo_posse`)
                VALUES (NULL ,  '" . $_GET['lead'] . "',  '" . $_GET['descricao'] . "',  '" . $_GET['endereco'] . "',  '" . $_GET['lat'] . "','" . $_GET['lon'] . "',"
                . " CURRENT_TIMESTAMP ,  '$posse',  '$cv',  '$iptu',  '$app',  '$asfalto',  '$calcada',  '$lixo',  '" . $_GET['tempo'] . "' )";

        //echo $query;
        $result = $db->query($query);

        $query = "SELECT MAX( id ) FROM wp_sml_lar_legal WHERE fk_wp_sml =" . $_GET['lead'];
        $result = $db->query($query);
        $processo = mysqli_fetch_row($result);
        $id = $processo[0];
        echo "<h1>Processo cadastrado com sucesso</h1>";
    } else {
        $query = "UPDATE  `manguevi_portal_2016`.`wp_sml_lar_legal` SET  
                `description` =  '" . $_GET['descricao'] . "',
                `endereco` =  '" . $_GET['endereco'] . "',
                `lat` =  '" . $_GET['lat'] . "',
                `lon` =  '" . $_GET['lon'] . "',
                `posse` =  '$posse',
                `cv` =  '$cv',
                `app` =  '$app',
                `asfalto` =  '$asfalto',
                `calcada` =  '$calcada',
                `lixo` =  '$lixo',
                `iptu` =  '$iptu',
                `tempo_posse` =  '" . $_GET['tempo'] . "' WHERE  `wp_sml_lar_legal`.`id` =$id";
       // echo $query;
        $result = $db->query($query);
        echo "<h1>Processo atualizado com sucesso</h1>";
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
                alert(document.processo.lat.value);

                document.processo.lat.value = localizacao.lat;
                document.processo.lon.value = localizacao.lon;

                alert(document.processo.lat.value);
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

                autocomplete.addListener('place_changed', function () {
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
                    radioButton.addEventListener('click', function () {
                        autocomplete.setTypes(types);
                    });
                }

                setupClickListener('changetype-all', []);
                setupClickListener('changetype-address', ['address']);
                setupClickListener('changetype-establishment', ['establishment']);
                setupClickListener('changetype-geocode', ['geocode']);
            }

            window.onload = function () {
                navigator.geolocation.getCurrentPosition(success, success, options);
            }
        </script>
    </head>
    <body>
        <div data-role="page" data-dialog="true">

            <div data-role="header" data-theme="a">
                <h1>Processo</h1> 
            </div>
            <h1><b>Regularização Fundiária</b></h1>
            <br>
            <div class="element-input">
                <a href="http://manguevivo.org.br/wp/wp-admin/admin.php?page=lar_legal_morettic_com_br" data-ajax="false"  class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-back ui-btn-icon-left ui-btn-a">Voltar</a>
            </div>
            <form data-ajax="false"  name="processo" style="max-width:100%;min-width:150px" method="get" action="https://manguevivo.org.br/wp/wp-content/themes/vantage/process.php" onsubmit="setLatLon()">
                <div class="title"><h2>Conte a sua história para que possamos fazer o seu lar legal!</h2></div>
                <div class="element-input">
                    <br>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                    Informe detalhadamente as características da situação atual de sua propriedade.<br>
                    <div class="element-input">
                        <label><input type="checkbox" name="posse"/>Escritura de posse?</label>
                    </div>
                    <div class="element-input">
                        <label><input type="checkbox" name="cv"/>Contrato de compra e venda?</label>
                    </div>
                    <div class="element-input">
                        <label><input type="checkbox" name="iptu" />Paga IPTU?</label>
                    </div>
                    <div class="element-input">
                        <label><input type="checkbox" name="app"/>Área APP?</label>
                    </div>
                    <div class="element-input">
                        <label><input type="checkbox" name="asfalto" />Rua asfaltada?</label>
                    </div>
                    <div class="element-input">
                        <label><input type="checkbox" name="calcada"/>Rua calçada?</label>
                    </div>
                    <div class="element-input">
                        <label><input type="checkbox" name="lixo" />Luz, Água, Coleta de lixo?</label>
                    </div>
                    <div class="element-input">
                        <label>Tempo de posse<input type="number" name="tempo" value="<?php echo $processo[14]; ?>"/></label>
                    </div>
                    <script>
                        document.processo.posse.checked = <?php echo $processo[7]; ?>;
                        document.processo.cv.checked = <?php echo $processo[8]; ?>;
                        document.processo.iptu.checked = <?php echo $processo[9]; ?>;
                        document.processo.app.checked = <?php echo $processo[10]; ?>;
                        document.processo.asfalto.checked = <?php echo $processo[11]; ?>;
                        document.processo.calcada.checked = <?php echo $processo[13]; ?>;
                        document.processo.lixo.checked = <?php echo $processo[12]; ?>;
                    </script>
                    <textarea class="large" type="text" name="descricao" placeholder="Descricao" cols="50" rows="5"><?php echo $processo[2]; ?></textarea>
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <input type="hidden" name="pg" value="main"/>
                    <input type="hidden" name="lead" value="<?php echo $_GET['lead']; ?>"/>
                    <input type="hidden" name="idLarLegal" value="NULL"/>
                    <input type="hidden" name="lat" value="<?php echo $processo[4]; ?>"/>
                    <input type="hidden" name="lon" value="<?php echo $processo[5]; ?>"/>
                    <input type="hidden" name="acao" value="save_lar_legal"/>
                </div>

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