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

function sc_login_error_msg() {
    return 'Tem algo errado aí';
}

add_filter('login_errors', 'sc_login_error_msg');