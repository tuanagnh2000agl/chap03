<h1>le tuana </h1>

<?php

    global $wpdb;
    //all : ''
    // news: tin-tuc
    // apple: iphone
    $taxonomy = 'ir-cat'; //taxonomy
    $termObj  = get_term_by('id', '153', $taxonomy); // get term with id
    $termObj  = get_term_by('slug', 'brief-results-ja', $taxonomy); // get term with slug
    $sql_post = "SELECT term_taxonomy_id, object_id, term_order FROM wp_term_relationships where term_taxonomy_id = '".$termObj->id."' "; /// get wp_term_relationships
    $term_rela = $wpdb->get_results($sql_post); // all list wp_term_relationships
    foreach ($term_rela as $key => $value) {
        $post = get_post($value->object_id); // single post
    }
?>