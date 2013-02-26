<?php

//Only for development
error_reporting( E_ALL );
ini_set( 'display_errors','On' );

//Fix 'Cannot modify header information' error
//ob_start( "ob_gzhandler" );

//Define Contants
define( 'BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'PUBLIC_URL', BASE_URL . 'public/' );
define( 'PRIVATE_URL', BASE_URL . 'private/' );
define( 'BASE_PATH', dirname( realpath(__FILE__) ) . '/' );
define( 'APP_PATH', BASE_PATH . 'app/' );
define( 'CODE_PATH', APP_PATH . 'code/' );
define( 'PRI_PATH', BASE_PATH . 'private/' );
define( 'PUB_PATH', BASE_PATH . 'public/' );
define( 'UPLOAD_PATH', BASE_PATH . 'upload/' );

//Autoloading Classes
include( CODE_PATH. 'autoloader.php' );

//Site config
include( APP_PATH. 'Core/Config/site.php' );

//Get site type from address
if( isset( $_GET['var1'] ) )
{
	$site = $_GET['var1'];
}
	
if( $site == 'public' )
{
	include( 'public/index.php' );
}
elseif( $site == 'private' )
{
	include( 'private/index.php' );
}
else
{
	header( 'Location: ?var1=public&var2=home' );
	exit();
}