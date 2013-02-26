<?php

//Controll Page include
if( isset( $_GET['var2'] ) )
{
	$page = $_GET['var2'];
	
	if($page)
	{
		$link = PUB_PATH . 'pages/' . $page . '.php';
		if( file_exists( $link ) )
		{
			include( PUB_PATH . 'Includes/header.php' );
			include( PUB_PATH . 'Includes/menu.php' );
			
			include_once( $link );
			
			include( PUB_PATH . 'Includes/footer.php' );
		}
		else
		{
			header( 'Location: ../../404.html' );
			exit();
		}
	}
}