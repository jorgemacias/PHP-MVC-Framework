<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$context->title?></title>
        <link rel ="stylesheet" href="css/bootstrap.css">
        <style type="text/css">
            #menu {
                background: red; /* For browsers that do not support gradients */
                background: -webkit-linear-gradient(left,  #3333FF, #9999FF); /* For Safari 5.1 to 6.0 */
                background: -o-linear-gradient(right, #3333FF, #9999FF); /* For Opera 11.1 to 12.0 */
                background: -moz-linear-gradient(right, #3333FF, #9999FF); /* For Firefox 3.6 to 15 */
                background: linear-gradient(to right, #3333FF, #9999FF); /* Standard syntax */
                padding: 10px;
                border-radius: 5px;
            }
            .jumbotron {margin-bottom: 0;}
            
        </style>
        <? Style($context) ?>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/AjaxFunction.js"></script>
        <? Script($context) ?>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h2>Welcome to my PHP MVC's Demo</h2>
                <h3>This is an MVC simulated framework of my own creation, with handling of vars, templates and controllers</h3>
                <label>Please select one option bellow</label>
            </div>
            
            <div id ="menu" class ="col-md-12">
                <div class="btn-group">
                    <a href="index.php">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          Home 
                        </button>
                    </a>
                </div>
                <div class="btn-group">
                    <a href="ajax.php">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          Ajax Sample
                        </button>
                    </a>
                </div>
                <div class="btn-group">
                    <a href="table.php">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          Table Sample
                        </button>
                    </a>
                </div>
            </div>
            
            <div class="col-md-12">
                <? Body($context) ?>
            </div>
            
        </div>
    </body>
</html>
