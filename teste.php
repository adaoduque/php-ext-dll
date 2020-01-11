<?php
	
	try {
		$comSimple = new COM("ComClassExample.ComClassExample");
		echo $comSimple->AddTheseUp( 1, 2);	
	}catch( com_exception $e ) {
    	print_r( 
    		array( 
				'errorCode' => $e->getCode(),
                'errorMessage' => $e->getMessage(),
                'errorFile' => $e->getFile(),
                'errorLine' => $e->getLine()
            )
    	);  
	}