<?php
/**
 * Set Alert
 */
function setAlert( $msg, $type = 'danger' ) {
    return "<p class=\"alert alert-{$type} d-flex justify-content-between\">{$msg}<button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
}

/**
 * Marriage Checker
 */

// local timezone set

date_default_timezone_set( 'asia/dhaka' );

function marriageChecker( $name, $year, $gender ) {
    $age = date( 'Y' ) - $year;

    $marriage_age = '';

    switch ( $gender ) {
    case 'Male':
        $marriage_age = 21;
        break;
    case 'Female':
        $marriage_age = 18;
        break;
    default:
        $marriage_age = 21;
    }

    if ( $age >= $marriage_age ) {
        return setAlert( "Hi {$name}, You are now ready for marriage.", "success" );
    } else {
        $wait_age = $marriage_age - $age;
        return setAlert( "Hi {$name}, You are {$age} years old and you have to wait {$wait_age} years.", "danger" );
    }

}
