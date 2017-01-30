<?php

header("Content-Type: application/json;charset=utf-8");
//PARAMS IN
$action = $_GET['action'];
$email = $_GET['demail'];
$passwd = $_GET['password'];
$name = $_GET['name'];
//Include DAO
include '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/src/DAO.php';
//Dao
$db = new DAO();
$jsonReturn = new stdClass();
$db->connect();
/**
 * http://manguevivo.org.br/wp/wp-content/themes/vantage/templates/login_controller.php?demail=malacma@gmail.com&action=login&password=b8f025ca
 */
if ($action == "login") {
    if ($email == "" || $passwd == "") {
        $jsonReturn->msg = "Email ou password inválido";
        $jsonReturn->status = 500;
    } else {
        $pqsswd = md5($passwd);

        $query = "SELECT `id` , `sml_name` ,`sml_email` FROM `wp_sml` WHERE `sml_email` = '$email' and sml_passwd = '$pqsswd'";
        $result = $db->query($query);
        $rperfil = mysqli_fetch_row($result);
        if (!empty($rperfil[0])) {
            $jsonReturn->msg = "Sucesso";
            $jsonReturn->status = 200;
            $jsonReturn->id = $rperfil[0];
            $jsonReturn->name = $rperfil[1];
            $jsonReturn->email = $rperfil[2];
        } else {
            $jsonReturn->msg = "Email ou password inválido";
            $jsonReturn->status = 500;
        }
    }
    /**
     * http://manguevivo.org.br/wp/wp-content/themes/vantage/templates/login_controller.php?demail=malacma@gmail.com.br&action=lost
     */
} else if ($action == "lost") {
    $query = "SELECT sml_email FROM  `wp_sml` WHERE sml_email =  '$email'";
    $result = $db->query($query);
    $rperfil = mysqli_fetch_row($result);
    //echo $query;
    //var_dump($result);
    if (!empty($rperfil[0])) {
        $jsonReturn->msg = "email_found";
        $jsonReturn->status = 200;

        $passwdNew = bin2hex(openssl_random_pseudo_bytes(4));
        $passMd5 = md5($passwdNew);

        $query = "update `wp_sml` set sml_passwd='$passMd5' WHERE sml_email = '$email'";
        $result = $db->query($query);

        $db->sendEmail("Nova senha de acesso [Mangue vivo]", "Sua senha foi alterada. \nSua nova senha de acesso é $passwdNew\n"
                . "Proteja sua senha de acesso e guarde-a de forma segura.\n"
                . "http://manguevivo.org.br", $email);
    } else {
        $jsonReturn->msg = "email_not_found";
        $jsonReturn->status = 404;
    }
    /**
     * http://manguevivo.org.br/wp/wp-content/themes/vantage/templates/login_controller.php?demail=projetos@morettic.com.br&action=add&password=b8f025ca&name=Afronso
     */
} else if ($action == "add") {
    $query = "SELECT sml_email FROM  `wp_sml` WHERE sml_email =  '$email'";
    $result = $db->query($query);
    $rperfil = mysqli_fetch_row($result);
    //echo $query;
    //var_dump($result);
    if (!empty($rperfil[0])) {
        $jsonReturn->msg = "email_exists";
        $jsonReturn->status = 500;
    } else {
        $jsonReturn->msg = "new_lead";
        $jsonReturn->status = 200;

        $passwdNew = bin2hex(openssl_random_pseudo_bytes(4));
        $passMd5 = md5($passwdNew);

        $query = "INSERT INTO `manguevi_portal_2016`.`wp_sml` (`id`, `sml_name`, `sml_email`, `sml_origem_lead`, `sml_passwd`)"
                . " VALUES (NULL, '$name', '$email', 'SITE','$passMd5')";
        $result = $db->query($query);

        $query = "SELECT id,sml_name,sml_email FROM  `wp_sml` WHERE sml_email =  '$email'";
        //echo $query;
        $result = $db->query($query);
        $rperfil = mysqli_fetch_row($result);
        $jsonReturn->id = $rperfil[0];
        $jsonReturn->name = $rperfil[1];
        $jsonReturn->email = $rperfil[2];
        $jsonReturn->md5Char = $passMd5;
        $db->sendEmail("Novo usuário [Mangue vivo]", "Obrigado por se cadastrar\n\nSua nova senha de acesso é $passwdNew\n"
                . "Proteja sua senha de acesso e guarde-a de forma segura.\n"
                . "http://manguevivo.org.br", $email);
    }
}

echo json_encode($jsonReturn);
$db->close();
?>

