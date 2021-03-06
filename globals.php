<?php

define('_PASSWORD_MIN_LEN', 6);
define('_PASSWORD_MAX_LEN', 30);
define('_NAME_MIN_LEN', 2);
define('_NAME_MAX_LEN', 30);
define('_PRODUCT_MIN_LEN', 2);
define('_PRODUCT_MAX_LEN', 20);
define('_DESCRIPTION_MAX_LEN', 255);

// ##############################

function _res( $status=200, $message=[] ){
  http_response_code($status); 
  header('Content-Type: application/json'); 
  echo json_encode($message); 
  exit();
}

// ##############################

function _api_db(){
  try{
        // $database_user_name = 'codeaobc_root';  // HOSTED 
        // $database_password = 'rootpassword2021';
        // $database_connection = 'mysql:host=localhost; dbname=codeaobc_amazonish; charset=utf8mb4';
        
        $database_user_name = 'root'; //LOCAL
        $database_password = 'root';
        $database_connection = 'mysql:host=localhost; dbname=amazonish; charset=utf8mb4';
      
        $database_options = [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        return new PDO( $database_connection, $database_user_name, $database_password, $database_options ); 
    } catch(Exception $ex){
        http_response_code(500);
        echo "System under maintainance".__LINE__;
    }
  }