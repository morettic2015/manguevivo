<?php
session_start();
/**
 * This template displays full width pages.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 *
 * Template Name: Lar Legal
 */
get_header();

        const PATH = '/home/manguevi/public_html/wp/wp-content/themes/vantage/templates/';
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/south-street/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    #feedback { font-size: 1.4em; }
    #selectable .ui-selecting { background: #FECA40; }
    #selectable .ui-selected { background: #F39814; color: white; }
    #selectable { list-style-type: none; margin: 0; padding: 0; width: 98%; }
    #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
</style>



<?php
//get_template_part('content', 'page');

$pg = $_GET['pg'];
if (empty($pg)) {
    ?>

    <center>



        <script>
            // This is called with the results from from FB.getLoginStatus().
            function statusChangeCallback(response) {
                console.log('statusChangeCallback');
                console.log(response);
                // The response object is returned with a status field that lets the
                // app know the current login status of the person.
                // Full docs on the response object can be found in the documentation
                // for FB.getLoginStatus().
                if (response.status === 'connected') {
                    // Logged into your app and Facebook.
                    testAPI();
                } else if (response.status === 'not_authorized') {
                    // The person is logged into Facebook, but not your app.
                    document.getElementById('status').innerHTML = 'Please log ' +
                            'into this app.';
                } else {
                    // The person is not logged into Facebook, so we're not sure if
                    // they are logged into this app or not.
                    document.getElementById('status').innerHTML = 'Please log ' +
                            'into Facebook.';
                }
            }

            // This function is called when someone finishes with the Login
            // Button.  See the onlogin handler attached to it in the sample
            // code below.
            function checkLoginState() {
                FB.getLoginStatus(function(response) {
                    statusChangeCallback(response);
                });
            }

            window.fbAsyncInit = function() {
                FB.init({
                    appId: '1183986588360160',
                    cookie: true, // enable cookies to allow the server to access
                    // the session
                    xfbml: true, // parse social plugins on this page
                    version: 'v2.8' // use graph api version 2.8
                });

                // Now that we've initialized the JavaScript SDK, we call
                // FB.getLoginStatus().  This function gets the state of the
                // person visiting this page and can return one of three states to
                // the callback you provide.  They can be:
                //
                // 1. Logged into your app ('connected')
                // 2. Logged into Facebook, but not your app ('not_authorized')
                // 3. Not logged into Facebook and can't tell if they are logged into
                //    your app or not.
                //
                // These three cases are handled in the callback function.

                FB.getLoginStatus(function(response) {
                    statusChangeCallback(response);
                });

            };

            // Load the SDK asynchronously
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            var main = {};
            // Here we run a very simple test of the Graph API after login is
            // successful.  See statusChangeCallback() for when this call is made.
            function testAPI() {
                console.log('Welcome!  Fetching your information.... ');
                FB.api('/me?fields=name,email,picture', function(response) {
                    console.log('Successful login for: ' + response.name);
                    // alert(response);
                    main = response;
                    document.getElementById('status').innerHTML =
                            'Redirecionando... Aguarde, ' + response.name + '!';
                    location.href = "https://manguevivo.org.br/wp/projeto-lar-legal/?pg=main&acao=face&username=" + response.name + "&email=" + response.email + "&id=" + response.id;
                });
            }
        </script>
        <div id = "dialog-1" title = "Registrar-se">
            <label>Nome :<br>
                <input id="cadNome" name="nome" type="text">
            </label>
            <br>
            <label>Email:<br>
                <input id="cadEmail" name="cadEmail" type="text">
            </label>
            <br>
            <input id="btRegister" name="btRegister" type="button" value="Criar conta" onclick="saveProfile()">
        </div>
        <!--
          Below we include the Login Button social plugin. This button uses
          the JavaScript SDK to present a graphical Login button that triggers
          the FB.login() function when clicked.
        -->
        <?php get_template_part('content', 'page'); ?>
        <script>
            document.getElementById('login').onclick = function() {
                var email = document.getElementById('email').value;
                var passw = document.getElementById('password').value;
                url = "../wp-content/themes/vantage/templates/login_controller.php?demail=" + email + "&action=login&password=" + passw + "";
                $.getJSON(url, function(jd) {
                    if (jd.status == 200) {
                        window.location.href = 'https://manguevivo.org.br/wp/projeto-lar-legal/?pg=main&acao=face&username=' + jd.name + '&email=' + jd.email + '&id=' + jd.id + '';
                    } else {
                        alert('Usuário ou senha inválidos.')
                    }
                });
            }
            function saveProfile() {
                var email = document.getElementById('cadEmail').value;
                var nome = document.getElementById('cadNome').value;
                url = "../wp-content/themes/vantage/templates/login_controller.php?demail=" + email + "&action=add&&name=" + nome;
                $.getJSON(url, function(jd) {
                    if (jd.status == 200) {
                        alert('Cadastro realizado com sucesso. Sua senha foi enviada por email.');
                    } else {
                        alert('Email já existente.');
                    }
                });
            }

            function cadUser() {
                $("#dialog-1").dialog("open");
            }
            function lostPass() {
                var email = prompt('Digite seu email cadastrado no mangue vivo');
                url = "../wp-content/themes/vantage/templates/login_controller.php?demail=" + email + "&action=lost";
                $.getJSON(url, function(jd) {
                    if (jd.status == 200) {
                        alert('Sua nova senha foi enviada por email.');
                    } else {
                        alert('Email não encontrado.');
                    }
                });
            }

            $("#dialog-1").dialog({
                autoOpen: false
            });

            /* $(document).ready(function() {
             $('[data-toggle="tooltip"]').tooltip();
             });*/
        </script>
    </center>

    <?php
} else {
    /*   //Lib facebook
      include PATH . 'src/face/autoload.php'; */
    //page
    include PATH . 'inc/' . $pg . ".php";
}
?>

<?php get_footer(); ?>