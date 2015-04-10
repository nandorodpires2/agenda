<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author Fernando Rodrigues
 */
class Request {
    
    private $_post;
    
    public function __construct() {
        $this->_post = $_POST;
    }

    public function isPost() {
        if (empty($this->_post)) {
            return false;
        }
        return true;
    }
    
    public function getPost() {
        
    }
    
    public function getRequest() {
        
    }
    
}
