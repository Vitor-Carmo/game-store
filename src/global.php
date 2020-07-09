<?php

//função que faz parte da SPL que significa Standard PHP Library
spl_autoload_register('loadClass');

function loadClass($className)
{
    require_once 'models/' .$className . '.php';
    
    // if (file_exists('models/' .$className . '.php')) {
    //     require_once 'models/' .$className . '.php';
    // }else{
    //     echo('deu ruim');
    // }
}