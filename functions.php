<?php
function register_my_menu(){
    register_nav_menu('main-menu','Menu  Principal');
}

add_action('after_setup_theme','register_my_menu');