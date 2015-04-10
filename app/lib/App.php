<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'Request.php';
include_once 'Registry.php';

/**
 * Description of App
 *
 * @author Fernando Rodrigues
 */
class App {
    
    public $_request;
    public $_registry;

    public function __construct() {
        $this->_request = new Request();
        $this->_registry = new Registry();
    }
    
}
