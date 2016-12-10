<?php

session_start();

/* @var $_SESSION type */
$idProcesso = $_SESSION['id'];

//echo $idProcesso;
/*
 * jQuery File Upload Plugin PHP Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
$upload_handler = new UploadHandler();



require '../../src/DAO.php';
//var_dump($_SESSION);
$db = new DAO();
$json = json_decode($_SESSION['files']);


if (isset($_GET['file'])) {
    //die($_GET['file']);
    $queryLog = "INSERT INTO  `manguevi_portal_2016`.`wp_sml_log` (`author` , `acao` ,id_processo) VALUES ( (SELECT fk_wp_sml FROM  `wp_sml_lar_legal` WHERE id =$idProcesso),  'Documentos removido (".$_GET['file'].")' ,$idProcesso )";
    $db->query($queryLog);
}

if (!empty($json->files)) {
//var_dump($json);
//INSERT INTO `manguevi_portal_2016`.`wp_sml_lar_doc` (`id`, `fk_wp_lar_legal`, `description`, `upload`) VALUES (NULL, '1', '2', '3');

    $query = "DELETE FROM  `wp_sml_lar_doc` WHERE  `fk_wp_lar_legal` =$idProcesso";
//echo $query;
    $db->connect();
    $db->query($query);

    foreach ($json->files as $mFile) {
        $query = "INSERT INTO `manguevi_portal_2016`.`wp_sml_lar_doc` (`id`, `fk_wp_lar_legal`, `description`, `upload`) VALUES (NULL, '$idProcesso', '" . $mFile->name . "', '" . $mFile->url . "')";
        //echo $query;
        $db->query($query);
    }

    $queryLog = "INSERT INTO  `manguevi_portal_2016`.`wp_sml_log` (`author` , `acao` ,id_processo) VALUES ( (SELECT fk_wp_sml FROM  `wp_sml_lar_legal` WHERE id =$idProcesso),  'Documentos visualizados / atualizados' ,$idProcesso )";
    $db->query($queryLog);


    unset($_SESSION['UPLOAD']);
}
$db->close();
