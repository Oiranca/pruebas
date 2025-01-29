<?php
function mi_tema_sencillo_recursos() {
    wp_enqueue_style('estilo-principal', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_sencillo_recursos');
?>
