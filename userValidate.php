<?php
    require_once('user.class.php');
    
    $userDetails = array(
                    'firstName' => 'test',
                    'lastName'  => 'test',
                    'email'     =>  'test@test.com',
                    'pwd'       => '123456'
                );
    
    $user = new User($userDetails);
    $user->validateFirstName();
    $user->validateSecondName();
    $user->validateEmail();
    $user->validatePassword();

?>