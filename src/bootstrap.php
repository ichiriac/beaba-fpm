<?php
/**
 * This file is distributed under the MIT Open Source
 * License. See README.MD for details.
 * @author Ioan CHIRIAC
 */

/**
 * Autoload handler
 */
spl_autoload_register(function($class) {
    $location = explode('\\', $class, 3);
    if ( 
        $location[0] === 'beaba'
        && $location[1] === 'fpm' 
    ) {
        include __DIR__ . '/' . strtr($location[2], '\\', '/');
        return class_exists( $class );
    } else {
        return false;
    }
});
