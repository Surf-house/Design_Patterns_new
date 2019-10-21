<?php

namespace Src\Folder;



spl_autoload_register(function($class_name) {
    //  the code below change backslash to slash
     $class_name = str_replace("\\", DIRECTORY_SEPARATOR, $class_name);
     require_once __DIR__  .'/'.  $class_name . '.php';
    
});
