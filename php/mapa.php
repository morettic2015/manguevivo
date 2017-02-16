<?php
session_start();
/**
 * This template displays full width pages.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 *
 * Template Name: Mapa
 */
get_header();
        const PATH = '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/';
include PATH . 'src/DAO.php';
$db = new DAO();
$query = "SELECT lat, lon, dt_registro FROM  `wp_sml_lar_legal` ";
$result = $db->query($query);
?>
<?php get_template_part('content', 'page'); ?>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    #map_inner {
        width: 100%;
        /// height: 400px;
        margin: 0;
        padding: 0;
        min-height: 480px;
        //  width: 480px;
    }
</style>
<!--
<div id="map_inner"></div>
-->
<script>

    var map;
    function initMap() {//!4d
        map = new google.maps.Map(document.getElementById('map_inner'), {
            center: {lat: -27.5705797, lng: -48.4322892},
            zoom: 10,
            styles: [{"featureType": "administrative", "stylers": [{"visibility": "off"}]}, {"featureType": "poi", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road", "elementType": "labels", "stylers": [{"visibility": "simplified"}]}, {"featureType": "water", "stylers": [{"visibility": "simplified"}]}, {"featureType": "transit", "stylers": [{"visibility": "simplified"}]}, {"featureType": "landscape", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"visibility": "off"}]}, {"featureType": "road.local", "stylers": [{"visibility": "on"}]}, {"featureType": "road.highway", "elementType": "geometry", "stylers": [{"visibility": "on"}]}, {"featureType": "water", "stylers": [{"color": "#84afa3"}, {"lightness": 52}]}, {"stylers": [{"saturation": -17}, {"gamma": 0.36}]}, {"featureType": "transit.line", "elementType": "geometry", "stylers": [{"color": "#3f518c"}]}]

        });
<?php
$url = "http://gaeloginendpoint.appspot.com/infosegcontroller.exec?action=6&id=5756433131896832&lat=-27.5833&lon=-48.5667&d=2000&type=MANGUE_VIVO,&myCity=Florianopolis";
$jsonRet = file_get_contents($url);
//echo $url;die();
//var_dump($jsonRet);
$denuncias = json_decode($jsonRet);
//var_dump($denuncias);

$dList = $denuncias->rList;

//var_dump($dList);

$cont = 0;

foreach ($dList as $obj) {
    ?>
            var marker<?php echo $cont++; ?> = new google.maps.Marker({
                position: {lat: <?php echo $obj->lat; ?>, lng: <?php echo $obj->lon; ?>},
                map: map,
                title: '<?php echo $obj->tit; ?>',
                icon: 'http://manguevivo.org.br/wp/wp-content/uploads/2016/10/marker_yellow.png'
            });
    <?php
}

while ($processo = mysqli_fetch_row($result)) {
    ?>
            var marker<?php echo $cont++; ?> = new google.maps.Marker({
                position: {lat: <?php echo $processo[0]; ?>, lng: <?php echo $processo[1]; ?>},
                map: map,
                title: '<?php echo $processo[2]; ?>',
                icon: 'http://manguevivo.org.br/wp/wp-content/uploads/2016/10/icon_blue.png'
            });
    <?php
}
$db->close();
?>
    }
    window.onload = function() {
        initMap();
    }

</script>


<?php get_footer(); ?>