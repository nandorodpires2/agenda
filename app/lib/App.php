<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'Request.php';
include_once 'Registry.php';

include_once 'Controller.php';
include_once 'Db.php';

/**
 * Description of App
 *
 * @author Fernando Rodrigues
 */
class App {
    
    public $_request;

    public function __construct() {
        $this->_request = new Request();
    }
    
}
