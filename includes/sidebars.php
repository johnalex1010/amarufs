<?php
/*
* Amaru FS Inmobiliaria
* @package Amaru FS Inmobiliaria
* @subpackage Amaru FS Inmobiliaria
* @since 1.0
*/


function ama_sidebars()
{
    register_sidebar(array(
        'name'          => sprintf(__('Barra Lateral', 'ama_abogados')),
        'id'            => 'main-sidebar',
        'description'   =>  sprintf(__('Widgets en la barra Lateral', 'ama_abogados')),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => "</h3>\n",
    ));
    register_sidebar(array(
        'name'          => sprintf(__('Barra Inferior', 'ama_abogados')),
        'id'            => 'main-sidebar-inferior',
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => "</h3>\n",
    ));
}
add_action('widgets_init', 'ama_sidebars');
