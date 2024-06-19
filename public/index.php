<?php

if (PHP_MAJOR_VERSION < 8)
{
    die('php 8 or higher!');
}

require_once dirname(__DIR__) . '/config/init.php';

echo 'test';