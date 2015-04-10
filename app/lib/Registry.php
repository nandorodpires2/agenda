<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registry
 *
 * @author Fernando Rodrigues
 */
class Registry {
    
    private $_registries = array();
    
    public function __construct() {
        
    }
    
    public function set($key, $value) {
        $this->_registries[$key] = $value;
    }
    
    public function get($key) {
        return $this->_registries[$key];
    }
    
}
