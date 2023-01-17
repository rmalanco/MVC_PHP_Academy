<?php

// controllers
function controllers_autoload($classnames)
{
    include 'controllers/' . $classnames . '.php';
}

spl_autoload_register('controllers_autoload');
