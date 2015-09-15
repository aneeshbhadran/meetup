<?php

	/**
	 * First Name Interface 
	 * Implement this interface if you need to validate first name
	 */
	
    Interface firstName{
        
        /** Function to get the first name **/
        public function getFirstName();
        
        /** Function to set the first name **/
        public function setFirstName();
        
        /** Function to validate first name **/
        public function validateFirstName();
        
        
    }
    
?>