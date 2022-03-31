<?php

/**
 * Set Alert
 */
function setAlert( $msg, $type = 'danger' ) {
    return "<p class=\"alert alert-{$type} d-flex justify-content-between\">{$msg}<button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
}

/**
 * Area Calculation Function
 */

function areaCalculate( $type, $length, $width = null ) {

    $area = 0;

    switch ( $type ) {
    case 'Rectangle':
        $area = $length * $width;
        break;
    case 'Square':
        $area = $length * $length;
        break;
    case 'Circle':
        $area = 3.1416 * ( $length * $length );
        break;
    case 'Triangle':
        $area = .5 * $length * $width;
        break;
    }

    return "The area of {$type} is {$area} sq.m";

}
