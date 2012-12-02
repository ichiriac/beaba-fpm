<?php
/**
 * This file is distributed under the MIT Open Source
 * License. See README.MD for details.
 * @author Ioan CHIRIAC
 */

/**
 * Initialize the bootstrap
 */
require_once __DIR__ . '/../src/boostrap.php';

$context = new ZMQContext();

$server = new ZMQSocket($context, ZMQ::SOCKET_REP);
$server->bind('tcp://localhost:9000');
$requests = array();
while(true) {
    $request = $server->recv();
    
    $header = unpack(
        'Cver/Ctype/nid/nlen/Cpad/Creserved', 
        substr($request, 0, 8)
    );
    if ( !isset($requests[ $header['id'] ]) ) {
        $requests[ $header['id'] ] = new \beaba\fpm\Request( $header['id'] );
    }
    $requests[ $header['id'] ]->
}