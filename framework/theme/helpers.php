<?php

function theme_custom_pagination($pages = '', $range = 4)
{
    if(empty($pages))
    {
        $pages = $GLOBALS['wp_query']->max_num_pages;
    }

    /* Don't print empty markup if there's only one page. */
    if ( $pages < 1 ) {

        return;
    }

    $paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;

    $pagenum_link = html_entity_decode( get_pagenum_link() );
    $query_args   = array();
    $url_parts    = explode( '?', $pagenum_link );

    if ( isset( $url_parts[1] ) ) {
        wp_parse_str( $url_parts[1], $query_args );
    }

    $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
    $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

    $format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
    $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

    /* Set up paginated links.*/
    $links = paginate_links( array(
        'base'     => $pagenum_link,
        'format'   => $format,
        'total'    => $pages,
        'current'  => $paged,
        'mid_size' => 1,
        'add_args' => array_map( 'urlencode', $query_args ),
        'prev_text' => '←',
        'next_text' => '→',
    ) );

    html_entity_decode($links);

    if ( $links ) :
        return $links;
    endif;

}

?>
