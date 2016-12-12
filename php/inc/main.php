<?php
/**
 * @Componente de documentos do lar legal
 * @Morettic.com.br
 * 2016 all right reserved!
 * 
 *  */
include PATH . 'src/DAO.php';

$db = new DAO();

// Quote and escape form submitted values
$name = $db->quote($_GET['username']);
$email = $db->quote($_GET['email']);
$id = $_GET['id'];
$acao = $_GET['acao'];
$fone = $_GET['fone'];
/**
  @se vier do facebook cria um perfil e atualiza o avatar
 *  */
if ($acao == "face") {
    $query = "INSERT INTO wp_sml( id, sml_name, sml_email, `sml_origem_lead` ,sml_avatar_url)  "
            . "VALUES ($id,  $name, $email,  'FACEBOOK' ,'https://graph.facebook.com/$id/picture') "
            . "ON DUPLICATE KEY UPDATE sml_name =  $name,sml_avatar_url =  'https://graph.facebook.com/$id/picture', `sml_origem_lead` =  'FACEBOOK'";
    $result = $db->query($query);


    /**
      @ se for a ação de atualiza o perfil
     * 
     *  */
} else if ($acao == "update_profile") {
    $rg = $_GET['rg'];
    $cpf = $_GET['cpf'];
    //var_dump($_GET);
    $query = "UPDATE wp_sml set sml_name =  $name,sml_avatar_url =  'https://graph.facebook.com/$id/picture', `sml_origem_lead` =  'FACEBOOK', sml_fone='$fone', rg='$rg', c_pf_pj='$cpf' where id = $id";
    $result = $db->query($query);

    $queryLog = "INSERT INTO  `manguevi_portal_2016`.`wp_sml_log` (`author` , `acao` ) VALUES ( $id,  'ATUALIZOU PERFIL' )";
    $result = $db->query($queryLog);

    echo "<h1>Perfil atualizado</h1>";
} else if ($acao == "processo") {
    /**

     *      */
    $idLarLegal = $_GET['idLarLegal'];
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
    $endereco = $_GET['endereco'];
    $desc = $_GET['desc'];
    $idLarLegal = $_GET['idLarLegal'];

    $query = "INSERT INTO `manguevi_portal_2016`.`wp_sml_lar_legal` (`id`, `fk_wp_sml`, `description`, `endereco`, `lat`, `lon`) "
            . "VALUES ($idLarLegal, '$id', '$desc', '$endereco', '$lat', '$lon') "
            . "ON DUPLICATE KEY UPDATE description = '$desc', lat = '$lat',lon='$lon',endereco='$endereco'";
    //echo $query;
    $result = $db->query($query);

    $queryLog = "INSERT INTO  `manguevi_portal_2016`.`wp_sml_log` (`author` , `acao` ) VALUES ( $id,  'PROCESSO ATUALIZADO ($desc) <br> $endereco  <br> Coordenadas  ($lat / $lon)' )";
    $result = $db->query($queryLog);

    echo "<h1>Processo salvo</h1>";
}


$queryProfile = "SELECT * FROM  `wp_sml` WHERE id =$id";
$result = $db->query($queryProfile);


$rperfil = mysqli_fetch_row($result);
//var_dump($rperfil);
?>

<script>

    $(function () {
        $("#tabs").tabs();
        $("#tabsProcesso").tabs();

    });

    var options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };
    function success(pos) {
        initMap(pos);
    }
    navigator.geolocation.getCurrentPosition(success, success, options);
    var localizacao = null;
    var map = null;
    function initMap(pos) {
        var crd = pos.coords;
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -33.8688, lng: 151.2195},
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
    function setMapaProperties(desc, idLarLegal, plat, plon, addrs) {
        document.processo.descricao.value = desc;
        document.processo.idLarLegal.value = idLarLegal;
        document.processo.endereco.value = addrs;
        localizacao = {lat: plat, lon: plon};
        google.maps.event.trigger(map, "resize");

        var m1 = new google.maps.Marker({
            position: new google.maps.LatLng(plat, plon),
            title: desc,
            map: map,
        });

        map.panTo(m1.getPosition());
        map.setZoom(14);

    }

    function saveProcesso() {
        url = "?id=" + document.processo.id.value;
        url += "&desc=" + document.processo.descricao.value;
        url += "&idLarLegal=" + document.processo.idLarLegal.value;
        url += "&pg=" + document.processo.pg.value;
        url += "&lat=" + localizacao.lat;
        url += "&lon=" + localizacao.lon;
        url += "&endereco=" + document.processo.endereco.value;
        url += "&acao=processo"

        if (confirm("Deseja salvar o seu processo?")) {
            alert(url);
            location.href = url;
        }

    }
    function mask(o, f) {
        setTimeout(function () {
            var v = mphone(o.value);
            if (v != o.value) {
                o.value = v;
            }
        }, 1);
    }

    function mphone(v) {
        var r = v.replace(/\D/g, "");
        r = r.replace(/^0/, "");
        if (r.length > 10) {
            // 11+ digits. Format as 5+4.
            r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "+($1) $2-$3");
        }
        else if (r.length > 5) {
            // 6..10 digits. Format as 4+4
            r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "+($1) $2-$3");
        }
        else if (r.length > 2) {
            // 3..5 digits. Add (0XX..)
            r = r.replace(/^(\d\d)(\d{0,5})/, "+($1) $2");
        }
        else {
            // 0..2 digits. Just add (0XX
            r = r.replace(/^(\d*)/, "+($1");
        }
        return r;
    }
    function mascaraMutuario(o, f) {
        v_obj = o
        v_fun = f
        setTimeout('execmascara()', 1)
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value)
    }

    function cpfCnpj(v) {

        //Remove tudo o que não é dígito
        v = v.replace(/\D/g, "")

        if (v.length <= 14) { //CPF

            //Coloca um ponto entre o terceiro e o quarto dígitos
            v = v.replace(/(\d{3})(\d)/, "$1.$2")

            //Coloca um ponto entre o terceiro e o quarto dígitos
            //de novo (para o segundo bloco de números)
            v = v.replace(/(\d{3})(\d)/, "$1.$2")

            //Coloca um hífen entre o terceiro e o quarto dígitos
            v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2")

        } else { //CNPJ

            //Coloca ponto entre o segundo e o terceiro dígitos
            v = v.replace(/^(\d{2})(\d)/, "$1.$2")

            //Coloca ponto entre o quinto e o sexto dígitos
            v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")

            //Coloca uma barra entre o oitavo e o nono dígitos
            v = v.replace(/\.(\d{3})(\d)/, ".$1/$2")

            //Coloca um hífen depois do bloco de quatro dígitos
            v = v.replace(/(\d{4})(\d)/, "$1-$2")

        }

        return v

    }

    function loadAnexos(element) {
        if (element.value != "") {
            document.getElementById('anexos').src = 'http://manguevivo.org.br/wp/wp-content/themes/vantage/templates/upload.php?id=' + element.value;
        }
    }

</script>
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Meus dados</a></li>
        <li><a href="#tabs-42">Processos</a></li>
        <li><a href="#tabs-22">Documentos</a></li>
        <li><a href="#tabs-12">Avisos</a></li>
        <li><a href="#tabs-52">Ajuda</a></li>
    </ul>
    <div id="tabs-1">
        <h1><b>Meus dados</b></h1>
        <br>
        <p>
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
    <div id="tabs-52">
        <h1><b>Ajuda</b></h1>
        <br>
        Assista ao video abaixo para tirar suas dúvidas de utilização de nosso sistema!
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
                <li class="ui-widget-content" style="height: 60px;margin: 15px">
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
                    echo "<option value='$processo[0]'>" . substr($processo[1], 0, 100) . "</option>\n";
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
                    <div class="title"><h2>Mantenha os dados do seus processos e documentos associados sempre atualizados!</h2></div>
                    <div class="element-input">
                        <br>
                        Informe detalhadamente as características da situação atual da regularização fundiária de sua propriedade.
                        <textarea class="large" type="text" name="descricao" placeholder="Descricao" cols="50" rows="5"></textarea>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="hidden" name="pg" value="main"/>
                        <input type="hidden" name="idLarLegal" value="NULL"/>
                        <input type="hidden" name="acao" value="save_lar_legal"/>
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
                        <input type="reset" value="Cancelar"/>
                    </div>

                </form>
            </div><!-- /header -->
            <hr/>
            <div role="main" class="ui-content">
                <h1><b>Meus processos</b></h1>
                <br>
                Clique no processo para editar
                <ol id="selectable">
                    <?php
                    $query = "SELECT `id`,upper(description),`endereco`,dt_registro,lat,lon FROM `wp_sml_lar_legal` WHERE fk_wp_sml = $id";
                    $result = $db->query($query);
                    while ($processo = mysqli_fetch_row($result)) {
                        ?>
                        <li class="ui-widget-content">
                            <a href="javascript:setMapaProperties('<?php echo $processo[1]; ?>','<?php echo $processo[0]; ?>', '<?php echo $processo[4]; ?>', '<?php echo $processo[5]; ?>', '<?php echo $processo[2]; ?>')">
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