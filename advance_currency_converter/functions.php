<?php

/**
 * Set Alert
 */
function setAlert( $msg, $type = 'danger', ) {
    return "<p class=\"alert alert-{$type} d-flex justify-content-between\">{$msg}<button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
}

// advance currency converter

function currencyConverter( $amount, $convertFrom, $convertTo ) {
    $rate = 0;

    if ( $convertFrom == 'BDT' ) {

        switch ( $convertTo ) {
        case 'BDT':
            $rate = 1;
            break;
        case 'USD':
            $rate = 0.012;
            break;
        case 'CAD':
            $rate = 0.015;
            break;
        case 'Pound':
            $rate = 0.0089;
            break;
        case 'Euro':
            $rate = 0.011;
            break;
        case 'Won':
            $rate = 14.23;
            break;
        }

    } elseif ( $convertFrom == "USD" ) {

        switch ( $convertTo ) {
        case 'BDT':
            $rate = 86.19;
            break;
        case 'USD':
            $rate = 1;
            break;
        case 'CAD':
            $rate = 1.26;
            break;
        case 'Pound':
            $rate = 0.76;
            break;
        case 'Euro':
            $rate = 0.91;
            break;
        case 'Won':
            $rate = 1225.69;
            break;
        }

    } elseif ( $convertFrom == "CAD" ) {

        switch ( $convertTo ) {
        case 'BDT':
            $rate = 68.67;
            break;
        case 'USD':
            $rate = 0.80;
            break;
        case 'CAD':
            $rate = 1;
            break;
        case 'Pound':
            $rate = 0.61;
            break;
        case 'Euro':
            $rate = 0.72;
            break;
        case 'Won':
            $rate = 976.55;
            break;
        }

    } elseif ( $convertFrom == "Pound" ) {

        switch ( $convertTo ) {
        case 'BDT':
            $rate = 112.85;
            break;
        case 'USD':
            $rate = 1.31;
            break;
        case 'CAD':
            $rate = 1.64;
            break;
        case 'Pound':
            $rate = 1;
            break;
        case 'Euro':
            $rate = 1.18;
            break;
        case 'Won':
            $rate = 1604.71;
            break;
        }

    } elseif ( $convertFrom == "Euro" ) {

        switch ( $convertTo ) {
        case 'BDT':
            $rate = 94.63;
            break;
        case 'USD':
            $rate = 1.31;
            break;
        case 'CAD':
            $rate = 1.38;
            break;
        case 'Pound':
            $rate = 0.84;
            break;
        case 'Euro':
            $rate = 1;
            break;
        case 'Won':
            $rate = 1344.71;
            break;
        }

    } elseif ( $convertFrom == "Won" ) {

        switch ( $convertTo ) {
        case 'BDT':
            $rate = 0.070;
            break;
        case 'USD':
            $rate = 0.00082;
            break;
        case 'CAD':
            $rate = 0.0010;
            break;
        case 'Pound':
            $rate = 0.00062;
            break;
        case 'Euro':
            $rate = 0.00074;
            break;
        case 'Won':
            $rate = 1;
            break;
        }

    }

    $convertedAmount = $amount * $rate;

    return "{$amount} {$convertFrom} = {$convertedAmount} {$convertTo}";

}
