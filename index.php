<?php
/**
 * Plugin Name: SC Custom Login
 * Plugin URI: https://profiles.wordpress.org/sergiuscosta
 * Description: Simple way to customize your login page
 * Version: 1.0.0
 * Author: Sergio Costa
 * Author URI: http://sergiocosta.net.br/
 * Text Domain: sclogin
 * License: GPLv2 or later
 */

/**
 * Change error msgs
 */
function login_error_msg() { 
    $custom_error_msgs = array(
        '<strong>EI!</strong>: Tá fazendo o que, aqui?',
        '<strong>Desista!</strong>: Você não vai entrar aqui!',
        '<strong>Oxe!</strong>: Acho que você não deveria estar aqui, hein?',
        '<strong>Opa!</strong>: Calma aê! Sem tentar trapacear!',
        '<strong>Vish!</strong>: Você não é daqui, né?',
        '<strong>Deus tá vendo</strong> Você tentando fazer isso!',
        '<strong>Fuçando</strong> onde não deve, né?',
        '<strong>Chuck Norris</strong> Não conseguiu logar! Você acha que você vai?',
        '<strong>YOU</strong> SHALL NOT PASS!',
    );
    return $custom_error_msgs[array_rand($custom_error_msgs)];;
}
add_filter( 'login_errors', 'login_error_msg' );