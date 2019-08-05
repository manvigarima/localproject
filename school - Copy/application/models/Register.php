<?php
class Application_Model_Register extends Zend_Db_Table_Abstract
    {
        
         public function insertuser($name,$email)
         {

                $name;
                $email;
                // $password;
                // $mobile;
                // $address;

                 $register = Zend_Db_Table_Abstract::getDefaultAdapter();
                
                 //$insert = $register->query(
                       // "INSERT into students  (`name`,`email`) values ('".$name."','".$email."') ");

 $register->query("INSERT INTO `students` (`name`,`email`) VALUES('".$name."','".$email."')");

                 // $register->query("INSERT INTO `students` (`name`,`email` ,`password`,`mobile`,`address`,`time`,`ip`) VALUES('".$name."','".$email."','". $password."','".$mobile."','".$address."','now()','"$_SERVER['REMOTE_ADDR']"')");

                
                 return $insert;
                 }
                 
                 
       

        }
        
