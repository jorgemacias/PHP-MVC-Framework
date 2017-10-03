<?php

    require_once('lib/secure.php');
    require_once('lib/templates.php');

    $context = new Context();
    $context->title = "Table Sample Page";
    
    RenderTemplate('templates/table.tpl.php', $context, 'templates/base.php');