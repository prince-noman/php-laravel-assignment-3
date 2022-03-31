<?php

/**
 * Set Alert
 */

function setAlert( $msg, $type = 'danger' ) {
    return "<p class=\"alert alert-{$type} d-flex justify-content-between\">$msg<button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
}

/**
 * Heading function
 */

function createHeading( $text, $tag, $color, $fs, $alignment ) {
    return "<{$tag} style=\"color:{$color}; font-size: {$fs}px; text-align:{$alignment}\">{$text}</{$tag}>";
}