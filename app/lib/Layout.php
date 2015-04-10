<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Layout
 *
 * @author Fernando Rodrigues
 */
class Layout {
    
    public function content() {

        $ctr = isset($_GET['ctr']) ? $_GET['ctr'] : 'Index';
        $act = isset($_GET['act']) ? $_GET['act'] : 'index';
        
        include_once '/../controller/' . $ctr . '.php';
                
        $instance = new $ctr;        
        $instance->$act();
        
        include '/../view/' . $ctr . '/' . $act . '.php';
        
    }
    
}
