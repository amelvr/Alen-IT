<?php

//Autoload Classes
function autoloadClasses($className) {
	$filename = CODE_PATH . 'Classes/' .$className . '.php';
	if (is_readable($filename)) {
		require $filename;
    }
}

function autoloadBLL($className) {
	$filename = CODE_PATH . 'BLLs/' .$className . '.php';
	if (is_readable($filename)) {
		require $filename;
    }
}

function autoloadDAL($className) {
	$filename = CODE_PATH . 'DALs/' .$className . '.php';
	if (is_readable($filename)) {
		require $filename;
    }
}

function autoloadHelpers($className) {
	$filename = APP_PATH . 'core/helpers/' .$className . '.php';
	if (is_readable($filename)) {
		require $filename;
    }
}

spl_autoload_register('autoloadClasses');
spl_autoload_register('autoloadBLL');
spl_autoload_register('autoloadDAL');
spl_autoload_register('autoloadHelpers');