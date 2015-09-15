<?php

	/**
	 * Second Name Interface
	 * Implement this interface if you need to validate second Name
	 */
    Interface secondNameInterface{
        
        /** Function to get the second Name **/
        public function getSecondName();
        
        /** Function to set the second Name **/
        public function setSecondName();    
        
        
        /** Function to validate second name **/
        public function validateSecondName();
    }
?>