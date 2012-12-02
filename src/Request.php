<?php

/**
 * This file is distributed under the MIT Open Source
 * License. See README.MD for details.
 * @author Ioan CHIRIAC
 */
namespace beaba\fpm;

class Request {
    private $id;
    public function __construct( $id ) {
        $this->id = $id;
    }
}