<?php

function errorClass($hasError) {
    if ($hasError) {
        return ' is-invalid';
    }
    return '';
}