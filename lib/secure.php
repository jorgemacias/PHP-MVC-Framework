<?php
    
    session_start();
    
//    Here we can control de access without permission or login, through the session 
//    if(!$_SESSION['ID'] )
//        Header ('location: login.php');
    
//  Here we can clean all the data through any request method and rename every variable automatically for using it 
    foreach($_GET as $k => $v){
        $var = str_replace("-", "_", $k);
        if(is_array($v)){
                $array = array();
                foreach($v as $val)
                        $array[] = mysql_escape_string(trim(($val)));
                $_GET[$k] = $array;
                $$var = $array;
        }else{
                $_GET[$k] = mysql_escape_string(trim(($v)));
                $$var = mysql_escape_string(trim(($v)));
        }
    }
 
    foreach($_POST as $k => $v){
        $var = str_replace("-", "_", $k);
        if(is_array($v)){
                $array = array();
                foreach($v as $val)
                        $array[] = mysql_escape_string(trim(($val)));
                $_POST[$k] = $array;
                $$var = $array;
        }else{
                $_POST[$k] = mysql_escape_string(trim(($v)));
                $$var = mysql_escape_string(trim(($v)));
        }
    }
?>
