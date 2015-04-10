<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config/app.php';
include_once 'lib/App.php';

/**
 * Description of Run
 *
 * @author Fernando Rodrigues
 */
class Run {
    
    private $_app;
    
    public function __construct() {
        $this->_app = new App();
    }
    
    public function start() {
        $this->startDb();
        $this->startLayout();
    }
    
    private function startDb() {       
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);        
        if (!$conn) {
            throw new Exception("Connection failed!");
        }
        Registry::set("conn", $conn);
    }
    
    private function startLayout() {
        include_once 'layout/layout.php';        
    }
    
}
