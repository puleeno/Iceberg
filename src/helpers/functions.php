<?php
function managads_load_template()
{
    $loader = \Managads\Template\Loader::getInstance();
}

if (!function_exists('array_get')) {
    function array_get()
    {
    }
}


function get_managads_ad($id)
{
    global $managads_query;
    if ($managads_query) {
        return $managads_query->getAd($id);
    }
}

function get_managads_ad_metas($ad_id)
{
}

function get_managads_ad_meta($ad_id, $meta_key)
{
}
