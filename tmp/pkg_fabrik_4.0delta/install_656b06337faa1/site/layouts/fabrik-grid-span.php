<?php
/**
 * Create appropriate bootstrap grid class
 */

defined('JPATH_BASE') or die;

$d = $displayData;

echo 'col-sm-' . $d->spanSize;
