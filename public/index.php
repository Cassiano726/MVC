<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        use App\Init;
        
        chdir(dirname(__DIR__));
        require 'vendor/autoload.php';
        require 'App/Init.php';
        
        $init = new Init();
        #echo $init->getUrl();//O echo pode ser usado para chamar um objeto->e suas funcionalidades.
        
        ?>
      
    </body>
</html>
