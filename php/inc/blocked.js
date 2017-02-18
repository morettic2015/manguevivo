$(function() {
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

var localizacao = null;
var map = null;
function initMap(pos) {
    var crd = pos.coords;
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: crd.latitude, lng: crd.longitude},
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
function setMapaProperties(desc, idLarLegal, plat, plon, addrs, tempo, posse, cv, iptu, app, asfalto, calcada, lixo, esc_publica, habitese, ant_2014, menor_120, projeto, iptu_prop, p_hid, p_arq, p_est) {
    document.processo.descricao.value = desc;
    document.processo.idLarLegal.value = idLarLegal;
    document.processo.endereco.value = addrs;
    document.processo.tempo.value = tempo;
    document.processo.posse.checked = posse;
    document.processo.cv.checked = cv;
    document.processo.iptu.checked = iptu;
    document.processo.app.checked = app;
    document.processo.asfalto.checked = asfalto;
    document.processo.calcada.checked = calcada;
    document.processo.lixo.checked = lixo;
    document.processo.esc_publica.checked = esc_publica;
    document.processo.habitese.value = habitese;
    document.processo.ant_2014.checked = ant_2014;
    document.processo.menor_120.value = menor_120;
    document.processo.projeto.checked = projeto;
    document.processo.iptu_prop.checked = iptu_prop;
    document.processo.p_hid.checked = p_hid == '1' ? true : false;
    document.processo.p_arq.checked = p_hid == '1' ? true : false;
    document.processo.p_est.checked = p_hid == '1' ? true : false;

    //Esconde ou mostra a caixa de projetos
    var fSHow = document.getElementById('projetos_chk');
    if (projeto) {
        fSHow.style.display = 'block';
        fSHow.style.visibility = 'visible';
        $("#projetos_chk").show();
    } else {
        fSHow.style.display = 'none';
        fSHow.style.visibility = 'hidden';
        $("#projetos_chk").hide();
    }
    localizacao = {lat: plat, lon: plon};
    //alert('ha'+habitese);
    if (habitese == "h") {
        showHideHabit(true);
    } else {
        showHideHabit(false);
    }

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
    url += "&tempo=" + document.processo.tempo.value;
    url += "&posse=" + document.processo.posse.checked;
    url += "&cv=" + document.processo.cv.checked;
    url += "&iptu=" + document.processo.iptu.checked;
    url += "&app=" + document.processo.app.checked;
    url += "&asfalto=" + document.processo.asfalto.checked;
    url += "&calcada=" + document.processo.calcada.checked;
    url += "&lixo=" + document.processo.lixo.checked;
    url += "&lat=" + localizacao.lat;
    url += "&lon=" + localizacao.lon;
    url += "&endereco=" + document.processo.endereco.value;
    url += "&esc_publica=" + document.processo.esc_publica.checked;
    url += "&habitese=" + document.processo.habitese.value;
    url += "&ant_2014=" + document.processo.ant_2014.checked;
    url += "&menor_120=" + document.processo.menor_120.value;
    url += "&projeto=" + document.processo.projeto.checked;
    url += "&iptu_prop=" + document.processo.iptu_prop.checked;
    url += "&p_hid=" + document.processo.p_hid.checked;
    url += "&p_arq=" + document.processo.p_arq.checked;
    url += "&p_est=" + document.processo.p_est.checked;
    url += "&acao=processo";
    // alert(url);

    if (confirm("Deseja salvar o seu processo?")) {
        //alert(url);
        location.href = url;
    }

}
function mask(o, f) {
    setTimeout(function() {
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
function novo() {
    if (confirm('Deseja cadastrar outro processo do Lar legal?')) {
        document.processo.endereco.value = "";
        document.processo.descricao.value = "";
        document.processo.idLarLegal.value = "NULL";
    }
}
function loadAnexos(element) {
    if (element.value != "") {
        document.getElementById('anexos').src = 'https://manguevivo.org.br/wp/wp-content/themes/vantage/templates/upload.php?id=' + element.value;
    }
}

function showHideHabit(v) {
    var element = document.getElementById("titDescInner");
    if (v) {
        element.innerHTML = 'Conte sua história para que possamos regularizar seu imóvel';
        $("#frmLarLegal").hide();
        $("#frmHabitese").show();
        txtPosseTit.innerHTML = 'Escritura de posse ou contrato de compra e venda?';
    } else {
        element.innerHTML = 'Conte sua história para que possamos regularizar seu terreno';
        $("#frmHabitese").hide();
        $("#frmLarLegal").show();
        txtPosseTit.innerHTML = 'Escritura de posse?';
    }

}

var txtPosseTit;
window.onload = function() {
    navigator.geolocation.getCurrentPosition(success, success, options);
    txtPosseTit = document.getElementById('txtPosseTit');
}

function showHideProjects(el) {
    var fSHow = document.getElementById('projetos_chk');
    if (el.checked == true) {
        fSHow.style.display = 'block';
        fSHow.style.visibility = 'visible';
        $("#projetos_chk").show();

    } else {
        fSHow.style.display = 'none';
        fSHow.style.visibility = 'hidden';
        $("#projetos_chk").hide();
    }
}