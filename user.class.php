<?php
    require_once 'firstNameInterface.php';
    require_once 'secondNameInterface.php';
    require_once 'passwordInterface.php';
    require_once 'emailInterface.php';
    
    
    /**
     *  This class is used to implement the corresponding interfaces
     *  @author Anish <aneesh.bhadran@impelsys.com>
     *  @version 1 version 1
     *  
     *  @class_implements(firstNameInterface)
     *  @class_implements(secondNameInterface)
     *  @class_implements(passwordInterface)
     *  @class_implements(emailInterface) 
     * 
     */
    
    class User implements firstNameInterface, secondNameInterface, passwordInterface, emailInterface{
    
        private $_firstName;
        private $_secondName;
        private $_email;
        private $_password;
        
    
        /**
         * Function __construct 
         *
         * This function is used to set the user related value at the time of object creation
         * @param VARCHAR $firstName  firstname of the user
         * @param VARCHAR $secondName secondname of the user
         * @param VARCHAR $email      email of the user
         * @param VARCHAR $password   password of the user
         */
        public function __construct($firstName, $secondName, $email, $password){
            $this->setFirstName($firstName);
            $this->setSecondName($secondName);
            $this->setEmail($email);
            $this->setPassword($password);        
        }
        
        /**
         * User :: getFirstName()
         * This function is used to get the first name 
         * @author Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @return VARCHAR first name 
         */
        public function getFirstName(){
            return $this->_firstName;
        }
        

        /**
         * User::setFirstName()
         * Function to set the first name 
         * @author Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @param VARCHAR $firstName setting the first name 
         */
        public function setFirstName($firstName){
            $this->_firstName = $firstName;
        }
        
        /**
         * User::validateFirstName()
         * Function to validate the first name 
         * @author  Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @return BOOLEAN 
         */
        public function validateFirstName(){
            
            if($this->getFirstName){
                return TRUE;
            }            
            return FALSE;
        }
        
        
        /**
         * User::getSecondName()
         * Function to get the second name 
         * @author  Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @return VARCHAR $secondName setting the second name
         */
        public function getSecondName(){
            return $this->_secondName;
        }
        
        /**
         * User::setSecondName()
         * Function to set the second name 
         * @author  Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @param VARCHAR $secondName second name
         */
        public function setSecondName($secondName){
            $this->_secondName = $secondName;
        }
        
        /**
         * User::validateSecondName()
         * Function to validate the first name
         * @author  Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @return BOOLEAN
         */
        public function validateSecondName(){
            if($this->getSecondName){
                return TRUE;
            }            
            return FALSE;
        }
        
        
        /**
         * User::getPassword()
         * Function to get the password
         * @author  Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @return VARCHAR $_password returning password
         */
        public function getPassword(){
            return $this->_password;
        }
        
        /**
         * User::setPassword()
         * Function to set the password
         * @author  Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @param VARCHAR $password set the password
         */
        public function setPassword($password){
            $this->_password = $password;
        }
        
        /**
         * User::validatePassword()
         * Function to validate the password
         * @author  Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @return BOOLEAN
         */
        public function validatePassword(){
            if($this->getPassword){
                return TRUE;
            }            
            return FALSE;
        }
        
        /**
         * User::getEmail()
         * Function to get the email
         * @author  Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @return VARCHAR $_email returning email
         */
        public function getEmail(){
            return $this->_email;
        }
        
        /**
         * User::setEmail()
         * Function to set the email
         * @author  Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @param VARCHAR $email set the email
         */
        public function setEmail($email){
            $this->_email = $email;
        }
        
        /**
         * User::validateEmail()
         * Function to validate the email
         * @author  Anish <aneesh.bhadran@impelsys.com>
         * @version 1.0 first version
         * @return BOOLEAN
         */
        public function validateEmail(){
            if($this->getEmail){
                return TRUE;
            }            
            return FALSE;
        }        
    
    
//@class ends    
    }