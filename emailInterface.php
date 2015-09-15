<?php

	/**
	 * Email Interface 
	 * Implement this interface if you need to validate email
	 */
	
    Interface emailInterface{
        
        /** function to get the email address **/
        public function getEmail();
        
        /** Function to set the email **/
        public function setEmail();
        
        
        /** Function to validate email **/
        public function validateEmail();
    
    
    }

?>