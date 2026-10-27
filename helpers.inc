<?php
/*
 * helpers.inc - small functions shared by several pages.
 */

// Escape text before printing it into HTML (prevents cross-site scripting).
function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
