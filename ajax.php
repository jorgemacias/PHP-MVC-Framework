<?php

    require_once('lib/secure.php');
    require_once('lib/templates.php');

    $context = new Context();
    $context->title = "Ajax Sample Page";
    
    if(!empty($_POST) || !empty($_FILES)){
        foreach($_POST as $key => $val){
            echo $key . " = " . $val . "<br>";
        }
        if($_FILES){
            echo "file = " . $_FILES['file']['name'];
        }
        exit;
    }
    
    RenderTemplate('templates/ajax.tpl.php', $context, 'templates/base.php');
    
    