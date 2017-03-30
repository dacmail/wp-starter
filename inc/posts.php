<?php
/* ARTICLES POST TYPE */
/*
add_action('init', 'ungrynerd_YOURPOSTTYPE_post_type');
function ungrynerd_YOURPOSTTYPE_post_type()  {
    $args = array(
        'label' => 'YOURPOSTTYPE',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'show_in_nav_menus' => false,
        'hierarchical' => false,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'rewrite' => array('slug' => 'YOURSLUG' ),
        'taxonomies' => array(),
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'author')
        );
    register_post_type('un_postype', $args);
}

function ungrynerd_YOURPOSTYPE_taxs() {
    register_taxonomy(
        "TAXNAME",
        array("un_postype"),
        array(
            "hierarchical" => true,
            "label" => __("TAXLABEL", 'framework'),
            "singular_label" => __("TAXLABEL", 'framework'),
            "rewrite" => array('slug' => 'TAX_SLUG', 'hierarchical' => true),
            'show_in_nav_menus' => true,
        )
    );
}

add_action('init', 'ungrynerd_YOURPOSTYPE_taxs', 0);
*/
