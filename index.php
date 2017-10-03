<?php
    require_once('lib/secure.php');
    require_once('lib/templates.php');
    
    $context = new Context();
    $context->title = "Home page";
    
    if(!empty($_POST)){
//        The textarea's content it was already parsed into this variable
        $context->text = $sometext;
    }
    
    RenderTemplate('templates/index.tpl.php', $context, 'templates/base.php');
?>