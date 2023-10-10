<?php

function sort_magasins_by_nom($data)
{
    usort($data, function ($a, $b) {
        return strcmp($a['nom'], $b['nom']);
    });
    return $data;
}

?>