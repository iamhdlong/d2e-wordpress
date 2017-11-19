<?php 
spl_autoload_register( 'd2e_autoload' );

function d2e_autoload($class_name){
	//echo $class_name .'--';

	if(false === strpos($class_name, 'D2e')){ // thu muc dau tien
		return ;
	}

	$file_parts = explode( '\\', $class_name );
	$namespace = '';
    for ( $i = count( $file_parts ) - 1; $i > 0; $i-- ) {
        $current = strtolower( $file_parts[ $i ] );
		$current = str_ireplace( '_', '-', $current );

		if(count($file_parts) -1 == $i){ // element dau tien -> tao thanh file name
				if ( strpos( strtolower( $file_parts[ count( $file_parts ) - 1 ] ), 'interface' ) ) {
			 	$interface_name = explode( '_', $file_parts[ count( $file_parts ) - 1 ] );
		        $interface_name = $interface_name[0];
				        $file_name = "interface-$interface_name.php";
				}else{
					$file_name = "class.$current.php";
				}
		}else{
			$namespace = '/' . $current . $namespace;
		}
	
    }
    $file_path = trailingslashit(dirname(dirname(__FILE__)) . $namespace);
    $file_path =  $file_path  . $file_name;

     if ( file_exists( $file_path ) ) {
    		include_once( $file_path );
	} else {
		    wp_die(
		        esc_html( "The file (" .$file_path .") to be loaded at does not exist." )
		    );
	}

}
?>