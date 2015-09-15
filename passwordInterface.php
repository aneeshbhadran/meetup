<?php
	
	/**
	 * Password Interface 
	 * Implement this interface if you need to validate password
	 */
    Interface passwordInterface {
    
        /** Function to get the password **/
        public function getPassword();
        
        /** Function to set the password **/
        public function setPassword();    
        
        /** Function to validate the password **/
        public function validatePassword();
    
    }


?>