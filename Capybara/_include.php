<?php

/**
  * Set _DS_ to the directory separator.
  *
  * @var string
  */
if (!defined('_DS_')) {
  define('_DS_', (DIRECTORY_SEPARATOR ?? '/'));
}

/**
  * Set _ROOT_ to the path of root of the site.
  *
  * @var string
  */
if (!defined('_ROOT_')) {
  define('_ROOT_', dirname(__FILE__)._DS_);
}

/**
  * Set _LIB_ to the lib path of the site.
  *
  * @var string
  */
if (!defined('_LIB_')) {
  define('_LIB_', _ROOT_.'lib'._DS_);
}

/**
  * Ignition initiated!
  */
require_once(_LIB_.'init.php');

?>